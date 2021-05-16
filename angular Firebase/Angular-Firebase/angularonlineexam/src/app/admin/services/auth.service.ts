import { Injectable } from '@angular/core';

import * as firebase from 'firebase/app';
import { AngularFireAuth } from '@angular/fire/auth';
import { Observable } from 'rxjs';
import { Router } from '@angular/router';

@Injectable({
  providedIn: 'root'
})
export class AuthService {
  user: Observable<firebase.User>;
  userData: any; // Save logged in user data

  constructor(private angauth: AngularFireAuth,
              public router: Router)
  {
    this.angauth.authState.subscribe(user => {
      if (user) {
        this.userData = user;
        localStorage.setItem('user', JSON.stringify(this.userData));
        JSON.parse(localStorage.getItem('user'));
      } else {
        localStorage.setItem('user', null);
        JSON.parse(localStorage.getItem('user'));
      }
    })
  }

  loginauth(email:string, password:string)
  {
    this.angauth.auth.signInWithEmailAndPassword(email, password).then(value => 
    {  
        this.router.navigate(['dashboard']);
        console.log(email);
        
    }
    ).catch( err => 
      {
        alert(err.message);
      
        this.router.navigate(['adminlogin']);
      })
  }
  get isLoggedIn(): boolean {
    const user = JSON.parse(localStorage.getItem('user'));
    return (user !== null ) ? true : false;
  }
  logout()
  {
      this.angauth.auth.signOut().then(() => {
      localStorage.removeItem('user');
      this.router.navigate(['/']);
    })
  }
}

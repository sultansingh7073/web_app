import { Injectable } from '@angular/core';

import * as firebase from 'firebase/app';
import { AngularFireAuth } from "@angular/fire/auth";
import { Router } from "@angular/router";
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class AuthService {

  user: Observable<firebase.User>;
  userData: any; // Save logged in user data

  constructor(
    public afAuth: AngularFireAuth, //Inject Firebase auth services
    public router: Router
  ){
      this.afAuth.authState.subscribe(user => {
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
   signupauth(email:string, password:string){
    this.afAuth.auth.createUserWithEmailAndPassword(email, password).then(
      value => {
        console.log('Success!', value);
        this.router.navigate(['ad_dashboard']);
      }
    ).catch( err => {
      console.log('Somthing Went Wrong:' ,err.message);
    })
  }
  loginauth(email:string, password:string)
  {
    this.afAuth.auth.signInWithEmailAndPassword(email, password).then(value => 
    {
        console.log('Nice It Worked!', value);      
        this.router.navigate(['ad_dashboard']);
        
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
      this.afAuth.auth.signOut().then(() => {
      localStorage.removeItem('user');
      this.router.navigate(['/']);
    })
  }


}

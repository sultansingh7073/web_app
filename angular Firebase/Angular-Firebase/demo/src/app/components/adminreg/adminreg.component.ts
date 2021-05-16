import { Component, OnInit } from '@angular/core';
import { AuthService } from 'src/app/services/auth.service';
import { FormGroup, FormControl, NgForm, FormBuilder, Validators } from '@angular/forms';

@Component({
  selector: 'app-adminreg',
  templateUrl: './adminreg.component.html',
  styleUrls: ['./adminreg.component.css']
})
export class AdminregComponent implements OnInit {

  loginform:FormGroup;  
 submitted = false;

  constructor(public auth: AuthService,
              private formBuilder: FormBuilder) { }

  ngOnInit() {
    this.loginform = this.formBuilder.group(
      {
        email: ['', [Validators.required,Validators.email]],
        password: ['',Validators.required],
      });
  }
  get fval()
  {
       return this.loginform.controls;
  }
  signup()
  { 
    this.submitted = true;
    if (this.loginform.invalid)
    {
        return;
    }
      this.auth.signupauth(this.fval.email.value, this.fval.password.value);
  }

}

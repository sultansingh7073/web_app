import { Component, OnInit } from '@angular/core';

import { AuthService } from '../../services/auth.service';
import { FormGroup, FormControl, NgForm, FormBuilder, Validators } from '@angular/forms';

@Component({
  selector: 'app-adminlogin',
  templateUrl: './adminlogin.component.html',
  styleUrls: ['./adminlogin.component.css']
})
export class AdminloginComponent implements OnInit
{
loginform:FormGroup;  
submitted = false;
  
  constructor(public auth:AuthService,
              private formBuilder: FormBuilder) { }
  title = 'reactive-form-validation-in-angular8';
 
  ngOnInit()
  {
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

  login()
  { 
    this.submitted = true;
    if (this.loginform.invalid)
    {
        return;
    }
      this.auth.loginauth(this.fval.email.value, this.fval.password.value);
  }
    
}
  
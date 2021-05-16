import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';

import { AngularFireModule } from "@angular/fire";
import { environment } from '../environments/environment';
import { AngularFireAuthModule } from "@angular/fire/auth";
import { AngularFirestoreModule } from '@angular/fire/firestore';
import { AngularFireDatabaseModule } from '@angular/fire/database';
import { AngularFireStorageModule } from '@angular/fire/storage';
import { ReactiveFormsModule } from '@angular/forms';

import { AuthService } from './services/auth.service';
import { AuthGuard } from './services/auth.guard';

import { AdminloginComponent } from './components/adminlogin/adminlogin.component';
import { AdminregComponent } from './components/adminreg/adminreg.component';


import { DefaultModule } from './components/admindashboard/default.module';



@NgModule({
  declarations: [
    AppComponent,
    AdminloginComponent,
    AdminregComponent,
    
    

    
  ],
  imports: [
    BrowserModule,
    ReactiveFormsModule,
    DefaultModule,
    AppRoutingModule,
    AngularFireModule.initializeApp(environment.firebaseConfig),
    AngularFirestoreModule,
    AngularFireAuthModule,
    AngularFireDatabaseModule,
    AngularFireStorageModule
  ],
  providers: [AuthService,AuthGuard],
  bootstrap: [AppComponent]
})
export class AppModule { } 
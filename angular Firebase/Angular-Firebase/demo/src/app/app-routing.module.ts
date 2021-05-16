import { NgModule, Component } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { AdminloginComponent } from './components/adminlogin/adminlogin.component';
import { AdminregComponent } from './components/adminreg/adminreg.component';
//import { DefaultComponent } from './components/admindashboard/default.component';






const routes: Routes = [
  { path: '', redirectTo: '/adminlogin', pathMatch: 'full'},
  { path: 'adminlogin', component: AdminloginComponent },
  { path: 'adminreg', component: AdminregComponent },
  //{ path: 'admin', loadChildren: () => import('./components/admindashboard/default.module').then(m => m.DefaultModule) },
  ];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

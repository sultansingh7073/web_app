import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { AuthGuard } from 'src/app/services/auth.guard'; //security

import { FormUploadComponent } from 'src/app/upload/form-upload/form-upload.component';
import { ListUploadComponent } from 'src/app/upload/list-upload/list-upload.component';
import { DetailsUploadComponent } from 'src/app/upload/details-upload/details-upload.component';
import { DefaultComponent } from './default.component';
import { CrudComponent } from '../crud/crud.component';
import { CrudEditComponent } from '../crud-edit/crud-edit.component';
import { CrudEditDataComponent } from '../crud-edit-data/crud-edit-data.component';




const routes: Routes = [
  { path: 'ad_dashboard', component: DefaultComponent,canActivate: [AuthGuard], children: [
    { path: 'list-upload', component:FormUploadComponent, canActivate: [AuthGuard]},
    { path: 'list-img', component:ListUploadComponent, canActivate: [AuthGuard]},
    { path: 'delete-upload', component:DetailsUploadComponent },
    { path: 'crud', component:CrudComponent },
    { path: 'crud-edit', component:CrudEditComponent },
    { path: 'crud-edit-data/:id', component:CrudEditDataComponent }
  ]}
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class DefaultRoutingModule { }

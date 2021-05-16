import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';



import { DefaultComponent } from './default.component';
import { FormUploadComponent } from 'src/app/upload/form-upload/form-upload.component';
import { ListUploadComponent } from 'src/app/upload/list-upload/list-upload.component';
import { DetailsUploadComponent } from 'src/app/upload/details-upload/details-upload.component';
import { CrudComponent } from '../crud/crud.component';
import { CrudEditComponent } from '../crud-edit/crud-edit.component';
import { CrudEditDataComponent } from '../crud-edit-data/crud-edit-data.component';


import { DefaultRoutingModule } from './default-routing.module';

import { FormsModule, ReactiveFormsModule } from '@angular/forms/';
import { RouterModule } from '@angular/router';


@NgModule({
  declarations: [
    DefaultComponent,
    FormUploadComponent,
    ListUploadComponent,
    DetailsUploadComponent,
    CrudComponent,
    CrudEditComponent,
    CrudEditDataComponent
  ],
  imports: [    
    CommonModule,
    RouterModule,
    DefaultRoutingModule,
    FormsModule,
    ReactiveFormsModule
  ]
})
export class DefaultModule { }

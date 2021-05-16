import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import {  ReactiveFormsModule, FormsModule } from '@angular/forms';
import { AppRoutingModule } from './app-routing.module';

import { environment } from 'src/environments/environment';
import { AngularFireModule } from "@angular/fire";
import { AngularFireAuthModule } from "@angular/fire/auth";

import { AuthService } from './admin/services/auth.service';
import { AuthGuard } from './admin/services/auth.guard';

import { AppComponent } from './app.component';
import { AdminloginComponent } from './admin/adminlogin/adminlogin.component';
import { DashboardComponent } from './admin/admindashboard/dashboard/dashboard.component';
import { CAddComponent } from './admin/admindashboard/candidate/c-add/c-add.component';
import { CListComponent } from './admin/admindashboard/candidate/c-list/c-list.component';
import { CEditComponent } from './admin/admindashboard/candidate/c-edit/c-edit.component';
import { CGroupComponent } from './admin/admindashboard/candidate/c-group/c-group.component';
import { CImportComponent } from './admin/admindashboard/candidate/c-import/c-import.component';
import { CDocumentComponent } from './admin/admindashboard/candidate/c-document/c-document.component';
import { CGAddComponent } from './admin/admindashboard/candidate/c-g-add/c-g-add.component';
import { CGEditComponent } from './admin/admindashboard/candidate/c-g-edit/c-g-edit.component';
import { CDocAddComponent } from './admin/admindashboard/candidate/c-doc-add/c-doc-add.component';
import { CDocEditComponent } from './admin/admindashboard/candidate/c-doc-edit/c-doc-edit.component';
import { QEditComponent } from './admin/admindashboard/question/q-edit/q-edit.component';
import { QSubListComponent } from './admin/admindashboard/question/q-sub-list/q-sub-list.component';
import { QSubAddComponent } from './admin/admindashboard/question/q-sub-add/q-sub-add.component';
import { QSubEditComponent } from './admin/admindashboard/question/q-sub-edit/q-sub-edit.component';
import { QImportComponent } from './admin/admindashboard/question/q-import/q-import.component';
import { LayoutComponent } from './admin/admindashboard/layout/layout.component';
import { AngularFirestoreModule } from '@angular/fire/firestore';
import { AngularFireDatabaseModule } from '@angular/fire/database';
import { AngularFireStorageModule } from '@angular/fire/storage';
import { CUploadFileComponent } from './admin/admindashboard/candidate/c-upload-file/c-upload-file.component';

import { QAddChapterComponent } from './admin/admindashboard/question/q-add-chapter/q-add-chapter.component';
import { QChapterListComponent } from './admin/admindashboard/question/q-chapter-list/q-chapter-list.component';

import { QTopicListComponent } from './admin/admindashboard/question/q-topic-list/q-topic-list.component';
import { QAddTopicComponent } from './admin/admindashboard/question/q-add-topic/q-add-topic.component';
import { AddQuestionComponent } from './admin/admindashboard/question/add-question/add-question.component';
import { ImportQuestionComponent } from './admin/admindashboard/question/import-question/import-question.component';
import { AddQuestionFormComponent } from './admin/admindashboard/question/add-question-form/add-question-form.component';
import { QuestionListComponent } from './admin/admindashboard/question/question-list/question-list.component';

@NgModule({
  declarations: [
    AppComponent,
    AdminloginComponent,
    DashboardComponent,
    
    CAddComponent,
    CListComponent,
    CEditComponent,
    CGroupComponent,
    CImportComponent,
    CDocumentComponent,
    CGAddComponent,
    CGEditComponent,
    CDocAddComponent,
    CDocEditComponent,

    QEditComponent,
    QSubListComponent,
    QSubAddComponent,
    QSubEditComponent,
    QImportComponent,
    LayoutComponent,
    CUploadFileComponent,
    QAddChapterComponent,
    QChapterListComponent,
    QTopicListComponent,
    QAddTopicComponent,
    AddQuestionComponent,
    ImportQuestionComponent,
    AddQuestionFormComponent,
    QuestionListComponent,
    
    
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    ReactiveFormsModule,
    AngularFireAuthModule,
    AngularFireModule.initializeApp(environment.firebaseConfig),
    AngularFirestoreModule,
    AngularFireDatabaseModule,
    AngularFireStorageModule
    
  ],
  providers: [AuthGuard,AuthService],
  bootstrap: [AppComponent]
})
export class AppModule { }

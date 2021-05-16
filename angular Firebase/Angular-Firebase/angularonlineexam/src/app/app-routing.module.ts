import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { AuthGuard } from './admin/services/auth.guard';
import { AdminloginComponent } from './admin/adminlogin/adminlogin.component';
import { LayoutComponent } from './admin/admindashboard/layout/layout.component';

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
import { CUploadFileComponent } from './admin/admindashboard/candidate/c-upload-file/c-upload-file.component';
import { QAddChapterComponent } from './admin/admindashboard/question/q-add-chapter/q-add-chapter.component';
import { QChapterListComponent } from './admin/admindashboard/question/q-chapter-list/q-chapter-list.component';
import { QTopicListComponent } from './admin/admindashboard/question/q-topic-list/q-topic-list.component';
import { QAddTopicComponent } from './admin/admindashboard/question/q-add-topic/q-add-topic.component';
import { AddQuestionComponent } from './admin/admindashboard/question/add-question/add-question.component';
import { ImportQuestionComponent } from './admin/admindashboard/question/import-question/import-question.component';
import { QuestionListComponent } from './admin/admindashboard/question/question-list/question-list.component';
import { AddQuestionFormComponent } from './admin/admindashboard/question/add-question-form/add-question-form.component';




const routes: Routes = [
  { path: '', redirectTo: '/admin', pathMatch: 'full'},
  { path: 'admin', component: AdminloginComponent },
    { path: 'dashboard', component: LayoutComponent, canActivate: [AuthGuard], children: [ 
    
    {path: 'index', component:DashboardComponent},  
    { path: 'candidate_list', component:CListComponent},  
    { path: 'candidate_add', component:CAddComponent},
    { path: 'candidate_edit/:id', component:CEditComponent},
    { path: 'candidate_group', component:CGroupComponent},

    { path: 'candidate_import', component:CImportComponent},
    { path: 'Upload_Candidate_data_file',component:CUploadFileComponent},
    { path: 'candidate_document', component:CDocumentComponent},

    { path: 'candidate_group_add', component:CGAddComponent},
    { path: 'candidate_group_edit/:id', component:CGEditComponent},

    { path: 'candidate_doc_add', component:CDocAddComponent},
    { path: 'candidate_doc_edit', component:CDocEditComponent},
    
    { path: 'add_question', component:AddQuestionComponent},
    { path: 'question_list', component:QuestionListComponent},
    { path: 'qus_form_list', component:AddQuestionFormComponent},

    { path: 'import_ques', component:ImportQuestionComponent},

    { path: 'question_edit', component:QEditComponent},

    { path: 'question_add_chapter', component:QAddChapterComponent},
    { path: 'question_chapter_list', component:QChapterListComponent},

    { path: 'question_topic_list', component:QTopicListComponent},
    { path: 'question_add_topic', component:QAddTopicComponent},

    { path: 'question_sub_list', component:QSubListComponent},
    { path: 'question_sub_add', component:QSubAddComponent},
    { path: 'question_sub_edit/:id', component:QSubEditComponent},
    { path: 'question_import', component:QImportComponent},
  ]}    
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

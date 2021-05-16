import { Component, OnInit } from '@angular/core';
import { AngularFirestore } from '@angular/fire/firestore';
import { FormGroup, FormControl } from '@angular/forms';

@Component({
  selector: 'app-add-question-form',
  templateUrl: './add-question-form.component.html',
  styleUrls: ['./add-question-form.component.css']
})
export class AddQuestionFormComponent implements OnInit {
  subdatealldata = [];
  chapterealldata = [];

  submitted = false;
  subject_form = new FormGroup({
    subject_name: new FormControl(),
    subject_topic: new FormControl(),
    question_type: new FormControl(),
    language: new FormControl(),

  });
  
  constructor(private fdb: AngularFirestore) { }

  ngOnInit() 
  {
    this.fdb.collection('subject')
    .snapshotChanges().subscribe(fethbdata =>{
      this.subdatealldata = [];
      fethbdata.forEach(a =>{
        let sub_data: any = a.payload.doc.data();
        sub_data.id = a.payload.doc.id;
        this.subdatealldata.push(sub_data);        
       });
       //console.log(this.bookalldata);
    });  

    this.fdb.collection('chapter')
    .snapshotChanges().subscribe(fethbdata =>{
      this.chapterealldata = [];
      fethbdata.forEach(b =>{
        let cha_data: any = b.payload.doc.data();
        cha_data.id = b.payload.doc.id;
        this.chapterealldata.push(cha_data);        
       });
       //console.log(this.bookalldata);
    });  
    
  }
  SubjectInsert()
  {
      const newId = this.fdb.createId();
      let data = Object.assign(
      { 
          timestamp: new Date(),
          bid: newId
      },this.subject_form.value);
      this.fdb.collection("subject_form").doc(newId).set(data);
  }

}

import { Component, OnInit } from '@angular/core';
import { FormGroup, FormControl, FormBuilder, Validators } from '@angular/forms';
import { AngularFirestore } from '@angular/fire/firestore';

@Component({
  selector: 'app-q-sub-add',
  templateUrl: './q-sub-add.component.html',
  styleUrls: ['./q-sub-add.component.css']
})
export class QSubAddComponent implements OnInit {

  submitted = false;
  subject = new FormGroup({
    subject_name: new FormControl(),
  });
  constructor(private formBuilder: FormBuilder,private fdb: AngularFirestore,) { }

  ngOnInit() 
  {
    this.subject = this.formBuilder.group(
      {
        subject_name: ['',[Validators.required]]
      });
  }
  get fsub()
  {
       return this.subject.controls;
  }
  SubjectInsert()
  { 
        console.log("subject");
        this.submitted = true;
        if (this.subject.invalid)
        {
            return;
        }
       else
       {
                  const newId = this.fdb.createId();
                  let data = Object.assign(
                  { 
                      timestamp: new Date(),
                      bid: newId
                  },this.subject.value);
                  this.fdb.collection("subject").doc(newId).set(data);
        
       }
  }

}

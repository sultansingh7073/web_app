import { Component, OnInit } from '@angular/core';
import { Validators, FormBuilder, FormGroup, FormControl } from '@angular/forms';
import { AngularFirestore } from '@angular/fire/firestore';

@Component({
  selector: 'app-q-add-topic',
  templateUrl: './q-add-topic.component.html',
  styleUrls: ['./q-add-topic.component.css']
})
export class QAddTopicComponent implements OnInit {
  submitted = false;
  topic = new FormGroup({
    topic_name: new FormControl(),
  });

  constructor(private formBuilder: FormBuilder,private fdb: AngularFirestore) { }

  ngOnInit() 
  {
    this.topic = this.formBuilder.group(
      {
        topic_name: ['',[Validators.required]]
      });
  }
  get ftopic()
  {
       return this.topic.controls;
  }
  TopicInsert()
  { 
        this.submitted = true;
        if (this.topic.invalid)
        {
            return;
        }
      else
       {
                  const newId = this.fdb.createId();
                  let data = Object.assign(
                  { 
                      timestamp: new Date(),
                      topic_id: newId
                  },this.topic.value);
                  this.fdb.collection("topic").doc(newId).set(data);
        
       }
  }
}

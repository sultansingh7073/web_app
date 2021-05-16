import { Component, OnInit } from '@angular/core';
import { Validators, FormGroup, FormControl, FormBuilder } from '@angular/forms';
import { AngularFirestore } from '@angular/fire/firestore';

@Component({
  selector: 'app-q-add-chapter',
  templateUrl: './q-add-chapter.component.html',
  styleUrls: ['./q-add-chapter.component.css']
})
export class QAddChapterComponent implements OnInit {
  
  submitted = false;
  chapter = new FormGroup({
    chapter_name: new FormControl(),
  });

  constructor(private formBuilder: FormBuilder,private fdb: AngularFirestore) { }

  ngOnInit() 
  {
    this.chapter = this.formBuilder.group(
      {
        chapter_name: ['',[Validators.required]]
      });
  }
  get fchapter()
  {
       return this.chapter.controls;
  }
  ChapterInsert()
  { 
        this.submitted = true;
        if (this.chapter.invalid)
        {
            return;
        }
       else
       {
                  const newId = this.fdb.createId();
                  let data = Object.assign(
                  { 
                      timestamp: new Date(),
                      chapter_id: newId
                  },this.chapter.value);
                  this.fdb.collection("chapter").doc(newId).set(data);
        
       }
  }


}

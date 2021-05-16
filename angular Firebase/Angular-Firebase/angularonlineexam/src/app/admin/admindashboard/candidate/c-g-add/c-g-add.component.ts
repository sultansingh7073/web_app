import { Component, OnInit } from '@angular/core';
import { FormBuilder, Validators, FormGroup, FormControl } from '@angular/forms';
import { AngularFirestore } from '@angular/fire/firestore';

@Component({
  selector: 'app-c-g-add',
  templateUrl: './c-g-add.component.html',
  styleUrls: ['./c-g-add.component.css']
})
export class CGAddComponent implements OnInit {

  

  group = new FormGroup({
    group_name: new FormControl(),
    group_detail: new FormControl()
  });
  submitted = false;

  constructor(private formBuilder: FormBuilder,private fdb: AngularFirestore) { }

  ngOnInit() {
    this.group = this.formBuilder.group(
      {
        group_name: ['', Validators.required],
        group_detail: ['']
      });
  }
  get getformvalue() { 
    return this.group.controls;
  }
  group_insert()
  {
    this.submitted = true;
    if (this.group.invalid) {
      return;
    }
    else
    { 
      const newId = this.fdb.createId();
      let data = Object.assign({ timestamp: new Date(),cid: newId},this.group.value);
  
      this.fdb.collection("group").doc(newId).set(data);
    }
  } 
  
}

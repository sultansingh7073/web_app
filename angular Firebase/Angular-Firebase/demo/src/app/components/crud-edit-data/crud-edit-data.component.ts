import { Component, OnInit } from '@angular/core';
import { AngularFirestore, fromDocRef } from '@angular/fire/firestore';
import { ActivatedRoute } from '@angular/router';
import { Observable } from 'rxjs';
import { map } from 'rxjs/operators';
import { FormControl, FormGroup, FormBuilder, Validators } from '@angular/forms';

@Component({
  selector: 'app-crud-edit-data',
  templateUrl: './crud-edit-data.component.html',
  
  styleUrls: ['./crud-edit-data.component.css']
})
export class CrudEditDataComponent implements OnInit {

  editbook: FormGroup;
  submitted = false;
  bookalldata = [];
  id = this.rout.snapshot.params['id'];

  constructor(private fdb: AngularFirestore,
              private rout: ActivatedRoute,
              private formBuilder: FormBuilder ) { }
                  
  ngOnInit() {
    this.editbook = this.formBuilder.group({
      bookname: ['', Validators.required],
      authur: ['', Validators.required],
    });  
    let id = this.rout.snapshot.params['id'];
        this.fdb.collection('fbook', Ref => Ref.where('bid','==', id ))
        .snapshotChanges().subscribe(fethbdata =>{
          fethbdata.forEach(a =>{
            let bookfiredata: any = a.payload.doc.data();
            bookfiredata.id = a.payload.doc.id;
            this.bookalldata.push(bookfiredata);     
           });
           console.log(this.bookalldata); 
        });        
  }
  get getformvalue() { 
    return this.editbook.controls;
  }
  updatebook(){
    this.submitted = true;
    if (this.editbook.invalid) {
      return;
    }
      let data = Object.assign({ timestamp: new Date()},this.editbook.value);
      this.fdb.doc('fbook/'+this.id).update(data);
      alert('SUCCESSFULLY Data Updated")\n\n' + JSON.stringify(this.editbook.value, null, 4));   
  } 
  resetForm() {
    this.submitted = false;
    this.editbook.reset();
}
}

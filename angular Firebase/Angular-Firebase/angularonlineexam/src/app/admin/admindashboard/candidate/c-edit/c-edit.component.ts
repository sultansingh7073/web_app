import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { AngularFirestore } from '@angular/fire/firestore';
import { FormControl, FormGroup } from '@angular/forms';

@Component({
  selector: 'app-c-edit',
  templateUrl: './c-edit.component.html',
  styleUrls: ['./c-edit.component.css']
})
export class CEditComponent implements OnInit {

  myCandidate = new FormGroup({
    name: new FormControl(),
    email: new FormControl(),
    enroll_number: new FormControl(),
    mobile: new FormControl(),
    gender: new FormControl(),
    DOB: new FormControl(),
    address: new FormControl(),
    country: new FormControl(),
    state: new FormControl(),
    city: new FormControl(),
    zipcode: new FormControl()
    
 });

  id = this.rout.snapshot.params['id'];
  CanFetchData = [];
  constructor(private fdb: AngularFirestore,private rout: ActivatedRoute) { }

  ngOnInit() {
    let id = this.rout.snapshot.params['id'];
    this.fdb.collection('candidate', Ref => Ref.where('cid','==', id ))
    .snapshotChanges().subscribe(fethbdata =>{
      fethbdata.forEach(a =>{
        let can_update_data: any = a.payload.doc.data();
        can_update_data.id = a.payload.doc.id;
        this.CanFetchData.push(can_update_data);     
       });
       console.log(this.CanFetchData); 
    });        
  }
  UpdateCandidate()
  {
    console.log("wetgfeargearg"); 
    let data = Object.assign({ timestamp: new Date()},this.myCandidate.value);

    
      this.fdb.doc('candidate/'+this.id).update(data);
      alert('SUCCESSFULLY Data Updated")\n\n' + JSON.stringify(this.myCandidate.value, null, 4)); 
  }

}

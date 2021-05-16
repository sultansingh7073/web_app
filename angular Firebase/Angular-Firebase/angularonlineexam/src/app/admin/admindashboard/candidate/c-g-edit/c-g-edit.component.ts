import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { AngularFirestore } from '@angular/fire/firestore';
import { FormGroup, FormControl } from '@angular/forms';

@Component({
  selector: 'app-c-g-edit',
  templateUrl: './c-g-edit.component.html',
  styleUrls: ['./c-g-edit.component.css']
})
export class CGEditComponent implements OnInit {

  myGroup = new FormGroup({
    group_update: new FormControl()
    
 });

  id = this.rout.snapshot.params['id'];
  updatefetchdata = [];
  constructor(private fdb: AngularFirestore,private rout: ActivatedRoute) { }

  ngOnInit() {
    let id = this.rout.snapshot.params['id'];
    this.fdb.collection('group', Ref => Ref.where('cid','==', id ))
    .snapshotChanges().subscribe(fethbdata =>{
      fethbdata.forEach(a =>{
        let group_update_data: any = a.payload.doc.data();
        group_update_data.id = a.payload.doc.id;
        this.updatefetchdata.push(group_update_data);     
       });
       console.log(this.updatefetchdata); 
    });        
  }
  updatedgroups()
  {
    let data = Object.assign({ timestamp: new Date()},this.myGroup.value);

    
      this.fdb.doc('group/'+this.id).update(data);
      alert('SUCCESSFULLY Data Updated")\n\n' + JSON.stringify(this.myGroup.value, null, 4)); 
  }

}

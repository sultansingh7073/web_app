import { Component, OnInit } from '@angular/core';
import { AngularFirestore } from '@angular/fire/firestore';

@Component({
  selector: 'app-c-group',
  templateUrl: './c-group.component.html',
  styleUrls: ['./c-group.component.css']
})
export class CGroupComponent implements OnInit {

  groupalldata = [];

  constructor(private fdb: AngularFirestore,) { }

  ngOnInit() {
    this.fdb.collection('group')
    .snapshotChanges().subscribe(fethbdata =>{
      this.groupalldata = [];
      fethbdata.forEach(a =>{
        let groupfiredata: any = a.payload.doc.data();
        groupfiredata.id = a.payload.doc.id;
        this.groupalldata.push(groupfiredata);        
       });
       //console.log(this.bookalldata);
    });  
  }

  deletegroup(id:string){
    console.log (this.fdb.doc('group/'+id).delete());
  }

}



import { Component, OnInit } from '@angular/core';
import { AngularFirestore } from '@angular/fire/firestore';

@Component({
  selector: 'app-q-sub-list',
  templateUrl: './q-sub-list.component.html',
  styleUrls: ['./q-sub-list.component.css']
})
export class QSubListComponent implements OnInit {
  suballdata = [];
  constructor(private fdb: AngularFirestore) { }

  ngOnInit() 
  {
      this.fdb.collection('subject', q => q.orderBy('timestamp','desc'))
      .snapshotChanges().subscribe(fethbdata =>{
        this.suballdata = [];
        fethbdata.forEach(a =>{
          let sub_data: any = a.payload.doc.data();
          sub_data.id = a.payload.doc.id;
          this.suballdata.push(sub_data);        
        });
        //console.log(this.bookalldata);
      });  
  }
  deletesubject(id:string){
    console.log (this.fdb.doc('subject/'+id).delete());
  }

}

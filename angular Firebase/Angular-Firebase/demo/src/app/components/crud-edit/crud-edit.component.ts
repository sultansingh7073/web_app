import { Component, OnInit } from '@angular/core';
import { AngularFirestore } from '@angular/fire/firestore';
import { Router } from '@angular/router';

@Component({
  selector: 'app-crud-edit',
  templateUrl: './crud-edit.component.html',
  styleUrls: ['./crud-edit.component.css']
})
export class CrudEditComponent implements OnInit {

  bookalldata = [];

  constructor(private fdb: AngularFirestore,
    private router: Router) { }

  ngOnInit() {
    this.fdb.collection('fbook', q => q.orderBy('timestamp','desc'))
    .snapshotChanges().subscribe(fethbdata =>{
      this.bookalldata = [];
      fethbdata.forEach(a =>{
        let bookfiredata: any = a.payload.doc.data();
        bookfiredata.id = a.payload.doc.id;
        this.bookalldata.push(bookfiredata);        
       });
       //console.log(this.bookalldata);
    });  
  }
 
  deletebook(id:string){
    console.log (this.fdb.doc('fbook/'+id).delete());
  }

}

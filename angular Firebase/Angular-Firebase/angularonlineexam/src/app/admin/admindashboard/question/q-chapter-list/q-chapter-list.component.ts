import { Component, OnInit } from '@angular/core';
import { AngularFirestore } from '@angular/fire/firestore';

@Component({
  selector: 'app-q-chapter-list',
  templateUrl: './q-chapter-list.component.html',
  styleUrls: ['./q-chapter-list.component.css']
})
export class QChapterListComponent implements OnInit {
  chapteralldata = [];
  constructor(private fdb: AngularFirestore) { }

  ngOnInit() 
  {
    this.fdb.collection('chapter', q => q.orderBy('timestamp','desc'))
    .snapshotChanges().subscribe(fethbdata =>{
      this.chapteralldata = [];
      fethbdata.forEach(a =>{
        let cha_data: any = a.payload.doc.data();
        cha_data.id = a.payload.doc.id;
        this.chapteralldata.push(cha_data);        
      });
      //console.log(this.bookalldata);
    });  
  }
  deletechapter(id:string){
    console.log (this.fdb.doc('chapter/'+id).delete());
  }

}

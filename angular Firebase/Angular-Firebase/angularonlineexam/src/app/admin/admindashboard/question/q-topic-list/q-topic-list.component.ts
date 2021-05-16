import { Component, OnInit } from '@angular/core';
import { AngularFirestore } from '@angular/fire/firestore';

@Component({
  selector: 'app-q-topic-list',
  templateUrl: './q-topic-list.component.html',
  styleUrls: ['./q-topic-list.component.css']
})
export class QTopicListComponent implements OnInit {
  topicalldata = [];
  constructor(private fdb: AngularFirestore) { }

  ngOnInit() 
  {
    this.fdb.collection('topic', q => q.orderBy('timestamp','desc'))
    .snapshotChanges().subscribe(fethbdata =>{
      this.topicalldata = [];
      fethbdata.forEach(a =>{
        let topic_data: any = a.payload.doc.data();
        topic_data.id = a.payload.doc.id;
        this.topicalldata.push(topic_data);        
      });
      //console.log(this.bookalldata);
    });  
  }
  deletetopic(id:string){
    console.log (this.fdb.doc('topic/'+id).delete());
  }
}

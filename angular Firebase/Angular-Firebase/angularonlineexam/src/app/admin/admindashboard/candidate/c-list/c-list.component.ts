import { Component, OnInit } from '@angular/core';
import { AngularFirestore } from '@angular/fire/firestore';
import { Router } from '@angular/router';


@Component({
  selector: 'app-c-list',
  templateUrl: './c-list.component.html',
  styleUrls: ['./c-list.component.css']
})
export class CListComponent implements OnInit {
  candidatealldata = [];
  constructor(private fdb: AngularFirestore,
    private router: Router) { }

  ngOnInit() {
    this.fdb.collection('candidate', q => q.orderBy('timestamp','desc'))
    .snapshotChanges().subscribe(fethbdata =>{
      this.candidatealldata = [];
      fethbdata.forEach(a =>{
        let candidate_data: any = a.payload.doc.data();
        candidate_data.id = a.payload.doc.id;
        this.candidatealldata.push(candidate_data);        
       });
       //console.log(this.bookalldata);
    });  
  }
  deletecandidate(id:string){
    console.log (this.fdb.doc('candidate/'+id).delete());
  }
}

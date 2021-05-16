import { Component, OnInit } from '@angular/core';
import { AngularFirestore } from '@angular/fire/firestore';
import { AngularFireStorage, AngularFireStorageReference, AngularFireUploadTask } from '@angular/fire/storage';
import { Observable } from 'rxjs';
import { finalize } from 'rxjs/operators';


@Component({
  selector: 'app-crud',
  templateUrl: './crud.component.html',
  styleUrls: ['./crud.component.css']
})
export class CrudComponent implements OnInit {

  bookname:string;
  authur:string;
  ref: AngularFireStorageReference;
  task: AngularFireUploadTask;
  private basePath = '/book';
  selectedFiles: File;
  uploadProgress: Observable<number>;
  
  
  constructor(private fdb: AngularFirestore,
              private afStorage: AngularFireStorage) { }
    
  ngOnInit() {

   

  }
  upload(event) {
    this.selectedFiles = event.target.files[0];
  }
  
  insert(){
    const id = Math.random().toString(36).substring(2);
    const filePath = `${this.basePath}/${id}-${this.selectedFiles.name}`;
    this.ref = this.afStorage.ref(filePath);
    this.task = this.ref.put(this.selectedFiles);
    this.uploadProgress = this.task.percentageChanges();

    // insert data with image Url in firestore
     
    this.task.snapshotChanges().pipe(
      finalize(() => {
        this.ref.getDownloadURL().subscribe(url => {
                    const newId = this.fdb.createId();
                    this.fdb.collection('fbook').doc(newId).set({
                            bid: newId,
                            timestamp: new Date(),
                            image : url,
                            bookname: this.bookname,  
                            authur: this.authur,
                    });
        });
      })
    ).subscribe();
  }
  clearForm(){
    (<HTMLFormElement>document.getElementById("Login")).reset();
   }
}

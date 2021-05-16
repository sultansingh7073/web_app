import { Component, OnInit } from '@angular/core';
import { AngularFirestore } from '@angular/fire/firestore';
import { FormBuilder, Validators, FormGroup, FormControl } from '@angular/forms';
import { AngularFireStorage, AngularFireStorageReference, AngularFireUploadTask } from '@angular/fire/storage';
import { finalize } from 'rxjs/operators';



@Component({
  selector: 'app-c-add',
  templateUrl: './c-add.component.html',
  styleUrls: ['./c-add.component.css']
})
export class CAddComponent implements OnInit {
   
  ref: AngularFireStorageReference;
  task: AngularFireUploadTask;
  private basePath = '/admin_profile';
  selectedFiles: File;
  imgstatus = false;
  submitted = false;
  
  ngForm = new FormGroup({
    name: new FormControl(),
    password: new FormControl(),
    email: new FormControl(),
    enroll_number: new FormControl(),
    mobile: new FormControl(),
    gender: new FormControl(),
    DOB: new FormControl(),
    address: new FormControl(),
    country: new FormControl(),
    state: new FormControl(),
    city: new FormControl(),
    zipcode: new FormControl(),
    reg_date: new FormControl(),
    phone_number: new FormControl(),
    field1: new FormControl(),
    field2: new FormControl(),
    field3: new FormControl(),
    field4: new FormControl(),
    field5: new FormControl(),
    group: new FormControl()
    
 });

  constructor(private fdb: AngularFirestore,
              private formBuilder: FormBuilder,
              private afStorage: AngularFireStorage) { }

  ngOnInit() {
    this.ngForm = this.formBuilder.group(
      {
        email: ['', [Validators.required,Validators.email]],
        password: ['',Validators.required],
        name: ['',Validators.required],
        gender: [''],
        enroll_number: [''],
        DOB: [''],
        mobile: ['',Validators.required],
        address:[''],
        country: [''],
        state: [''],
        city: [''],
        zipcode: [''],
        reg_date: [''],
        phone_number: [''],
        field1: [''],
        field2: [''],
        field3: [''],
        field4: [''],
        field5: [''],
        group: ['']
      });
  }
  get fadd()
  {
       return this.ngForm.controls;
  }
  admin_upload(event) 
  {
    this.selectedFiles = event.target.files[0];
    this.imgstatus = true;
  }
  
  insert()
  { 
   
        this.submitted = true;
        if (this.ngForm.invalid)
        {
            return;
        }
        else
        { 
          if(this.imgstatus == true)
          {       
                  const id = Math.random().toString(36).substring(2);
                    const filePath = `${this.basePath}/${id}-${this.selectedFiles.name}`;
                    this.ref = this.afStorage.ref(filePath);
                    this.task = this.ref.put(this.selectedFiles);
                    console.log(filePath);
                    this.task.snapshotChanges().pipe
                    (
                        finalize(() => 
                        {
                            this.ref.getDownloadURL().subscribe(url => 
                            {
                                const newId = this.fdb.createId();
                                   let data = Object.assign(
                                    { 
                                          timestamp: new Date(),
                                          cid: newId,status : 1,
                                          image : url
                                    },this.ngForm.value);
                                    this.fdb.collection("candidate").doc(newId).set(data);
                            })
                        })
                      ).subscribe();
          }
          else{
            const newId = this.fdb.createId();
                                   let data = Object.assign(
                                    { 
                                          timestamp: new Date(),
                                          cid: newId,status : 1                              
                                    },this.ngForm.value);
                                    this.fdb.collection("candidate").doc(newId).set(data);
                                           
          }
        }  
  }

}

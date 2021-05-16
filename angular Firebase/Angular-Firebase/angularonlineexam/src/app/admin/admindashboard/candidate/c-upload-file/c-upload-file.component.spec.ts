import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CUploadFileComponent } from './c-upload-file.component';

describe('CUploadFileComponent', () => {
  let component: CUploadFileComponent;
  let fixture: ComponentFixture<CUploadFileComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CUploadFileComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CUploadFileComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

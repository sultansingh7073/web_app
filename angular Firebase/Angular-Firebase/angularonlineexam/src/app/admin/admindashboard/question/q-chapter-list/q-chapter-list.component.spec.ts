import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { QChapterListComponent } from './q-chapter-list.component';

describe('QChapterListComponent', () => {
  let component: QChapterListComponent;
  let fixture: ComponentFixture<QChapterListComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ QChapterListComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(QChapterListComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

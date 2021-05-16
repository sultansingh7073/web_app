import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { QAddChapterComponent } from './q-add-chapter.component';

describe('QAddChapterComponent', () => {
  let component: QAddChapterComponent;
  let fixture: ComponentFixture<QAddChapterComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ QAddChapterComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(QAddChapterComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

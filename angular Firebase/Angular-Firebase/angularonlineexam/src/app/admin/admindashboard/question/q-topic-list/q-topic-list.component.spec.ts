import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { QTopicListComponent } from './q-topic-list.component';

describe('QTopicListComponent', () => {
  let component: QTopicListComponent;
  let fixture: ComponentFixture<QTopicListComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ QTopicListComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(QTopicListComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

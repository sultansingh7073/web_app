import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { QAddTopicComponent } from './q-add-topic.component';

describe('QAddTopicComponent', () => {
  let component: QAddTopicComponent;
  let fixture: ComponentFixture<QAddTopicComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ QAddTopicComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(QAddTopicComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

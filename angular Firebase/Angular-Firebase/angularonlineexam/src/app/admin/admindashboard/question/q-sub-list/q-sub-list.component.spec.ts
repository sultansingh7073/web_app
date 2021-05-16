import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { QSubListComponent } from './q-sub-list.component';

describe('QSubListComponent', () => {
  let component: QSubListComponent;
  let fixture: ComponentFixture<QSubListComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ QSubListComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(QSubListComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

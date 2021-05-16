import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AdminregComponent } from './adminreg.component';

describe('AdminregComponent', () => {
  let component: AdminregComponent;
  let fixture: ComponentFixture<AdminregComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AdminregComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AdminregComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

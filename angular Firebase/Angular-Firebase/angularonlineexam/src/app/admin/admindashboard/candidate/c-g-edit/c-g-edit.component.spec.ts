import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CGEditComponent } from './c-g-edit.component';

describe('CGEditComponent', () => {
  let component: CGEditComponent;
  let fixture: ComponentFixture<CGEditComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CGEditComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CGEditComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

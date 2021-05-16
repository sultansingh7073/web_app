import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CGAddComponent } from './c-g-add.component';

describe('CGAddComponent', () => {
  let component: CGAddComponent;
  let fixture: ComponentFixture<CGAddComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CGAddComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CGAddComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

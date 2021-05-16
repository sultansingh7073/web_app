import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CGroupComponent } from './c-group.component';

describe('CGroupComponent', () => {
  let component: CGroupComponent;
  let fixture: ComponentFixture<CGroupComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CGroupComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CGroupComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

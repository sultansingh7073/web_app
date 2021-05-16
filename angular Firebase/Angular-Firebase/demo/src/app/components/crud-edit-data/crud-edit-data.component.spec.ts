import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CrudEditDataComponent } from './crud-edit-data.component';

describe('CrudEditDataComponent', () => {
  let component: CrudEditDataComponent;
  let fixture: ComponentFixture<CrudEditDataComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CrudEditDataComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CrudEditDataComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

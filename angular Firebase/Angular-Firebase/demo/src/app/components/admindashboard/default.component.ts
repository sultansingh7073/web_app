import { Component, OnInit } from '@angular/core';
import { AuthService } from '../../services/auth.service';

@Component({
  selector: 'app-default',
  templateUrl: './default.component.html',
  styleUrls: ['./default.component.css']
})
export class DefaultComponent implements OnInit {
 
  constructor(public auth: AuthService) { }

  ngOnInit() {
  }
  
  logout(){
    this.auth.logout();
  }
}

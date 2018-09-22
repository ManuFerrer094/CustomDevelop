import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-main-p',
  templateUrl: './main-p.component.html',
  styleUrls: ['./main-p.component.css']
})
export class MainPComponent implements OnInit {
  producto:string[]=["UPV","TVE","Santillana","McDonals"];
  lista:string[]=[this.producto[0],this.producto[1],this.producto[2],this.producto[3],];
 
  
  constructor() { }

  ngOnInit() {
    
  }

  
 

}

import { Component, OnInit } from '@angular/core';
import { TaskService } from 'src/app/service/task.service';

import { Booking } from './services.model';

@Component({
  selector: 'app-services',
  templateUrl: './services.component.html',
  styleUrls: ['./services.component.css']
})
export class ServicesComponent implements OnInit {
dataArr: any;
  booking = new Booking();
  data3: string;
  catArr: Object;
  constructor(
    private dataService:TaskService
  ) { }

  ngOnInit(): void {
    this.getBookingData();
 
  }
  bookingData()
  {
    this.dataService.bookingData(this.booking).subscribe(res=> {
      this.getBookingData();
    })
  }
  getBookingData()
  {
    this.dataService.getBookingData().subscribe(res=> {
      this.dataArr = res;
    })
  }
   deleteBooking(id: any)
  {
    this.dataService.deleteBooking(id).subscribe(res=> {
      this.getBookingData();
    })
   }
  
























  
}

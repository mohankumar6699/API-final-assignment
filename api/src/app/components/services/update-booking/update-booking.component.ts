import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { TaskService } from 'src/app/service/task.service';
import { Booking } from '../services.model';

@Component({
  selector: 'app-update-booking',
  templateUrl: './update-booking.component.html',
  styleUrls: ['./update-booking.component.css']
})
export class UpdateBookingComponent implements OnInit {
id: any;
  data: any;
  booking = new Booking();
  data3: string;
  catArr: Object;
  constructor(
    private route: ActivatedRoute,
     private dataService:TaskService) { 
    
}

  ngOnInit(): void {
    this.id = this.route.snapshot.params.id;
    this.getOneBookingData();
   
 
  }
  getOneBookingData()
  {
    this.dataService.getOneBooking(this.id).subscribe(res=> {
      this.data = res;
      this.booking = this.data;
    })
  }
  updateBooking()
  {
    this.dataService.updateBooking(this.id,this.booking).subscribe(res=> {
      location.pathname = 'service';
    })
  }

  
}

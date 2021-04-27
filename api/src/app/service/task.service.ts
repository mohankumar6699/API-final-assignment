import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Booking } from '../components/services/services.model';
@Injectable({
  providedIn: 'root'
})
export class TaskService {

  data: any;
  constructor(private httpClient:HttpClient) { 
  
  }
  
  bookingData(data: any) {
    return this.httpClient.post('http://localhost:8000/addbooking',data);
  }
   getBookingData()
  {
    return this.httpClient.get('http://localhost:8000/booking');
  }
  getOneBooking(id: any)
  {
    return this.httpClient.get('http://localhost:8000/booking/'+id);
  }
  deleteBooking(id: any)
  {
    return this.httpClient.delete('http://localhost:8000/deletebooking/'+id);
  }
   updateBooking(id:any,data:any)
  {
    return this.httpClient.patch('http://localhost:8000/updatebooking/'+id,data);
   }
  
  
 
}

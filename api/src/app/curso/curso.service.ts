import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { map } from 'rxjs/operators'; 
import { Curso } from './curso';


@Injectable({
  providedIn: 'root'
})
export class CursoService {

  //URL
  url = "http://localhost/api/php/";

  //armazenar e exibir dados
  vetor: Curso[]=[];

  constructor(private http: HttpClient) { }

  //obter todos os cursos
  obterCursos():Observable<Curso[]>{
    return this.http.get(this.url+"listar").pipe(
      map((res:any)=>{
        this.vetor = res['curso'];
        return this.vetor;
      })
    )
  }

}

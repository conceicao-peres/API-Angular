import { Component, OnInit } from '@angular/core';
import { Curso } from './curso';
import { CursoService } from './curso.service';


@Component({
  selector: 'app-curso',
  templateUrl: './curso.component.html',
  styleUrls: ['./curso.component.css']
})
export class CursoComponent implements OnInit{

  vetor: Curso[]=[];

  //objeto da classe curso
  curso = new Curso();

  //contrutor
  constructor(private curso_servico:CursoService){}

  //inicializador
  ngOnInit()  {
    this.selecionar();
  }

  //cadastro
  cadastrar():void{
    alert("Cadastro")
  }

  //selecao
  selecionar(){
   this.curso_servico.obterCursos().subscribe(
    (res: Curso[])=>{
      this.vetor = res;
    }
   )
  }

  //alterar
  alterar():void{
    alert("Alterar")
  }

  //remover
  remover():void{
    alert("Alterar")
  }
}

import {createApp} from "vue/dist/vue.esm-bundler";
import axios from 'axios';
import spanish from './data_tables/spanish.json'
import swal from "sweetalert";

const invitados = createApp({
    data() {
        return {
            tablaLista: {
                draw: () => {}
            },
            saludo:''
        }
    },
    mounted() {
        $(document).ready(() => {
            this.inicializarTablaListaInvitados();
        });
    },
    methods: {
        inicializarTablaListaInvitados(){

            this.tablaLista = $('#lista_invitados').DataTable({
                "language": spanish,
                "processing": true,
                "serverSide": true,
                "responsive": true,
                "ordering": false,
                search: {
                    return: true,
                },
                "ajax": {
                    url: "/lista-invitados",
                    data: function (d) {
                        return $.extend({}, d, {
                            "buscar": $('#caja-filtro').val().toLowerCase(),
                        });
                    },
                    error: function (xhr, error, thrown) {
                        console.log(xhr, error, thrown);
                    }
                },
                "columns": [
                    { data: "nombre", name: "nombre" },
                    {
                        data: "estado",
                        name: "estado",
                        sClass: "text-left",
                        render: function( data, type, row) {
                            return `<div class="badge ${data.color_badge}">${ data.nombre }</div>`;
                        }
                    },
                    {data: "acompañantes", name: "acompañantes"},
                    { data: "id", name:"id", sClass:"text-center botones",
                        render: function( data, type, row) {
                            return `
                                <a href="/" class="btn btn-light-success btn-sm" style="margin-right: 4px;">Realizar ingreso</a>
                            `;
                        }
                    }
                ],

            });
            $('#caja-filtro').bind('keyup', () => {

                clearTimeout( this.timeBuscador );
                this.timeBuscador = setTimeout(() => {
                    this.tablaLista.draw();
                }, 380);

            });
        }
    }
});

invitados.mount('#app_general')

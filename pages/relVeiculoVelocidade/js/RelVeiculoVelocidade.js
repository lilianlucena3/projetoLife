Cmp.RelVeiculoVelocidade = function () {

    var private = {

        render: function () {

            Cmp.createGrid({
                id: 'gridDadosVeiculosVelocidade',
                renderTo: '#divCmpGridVeiculoVelocidade',
                header: [
                    {
                        text: 'Placa',
                        field: 'placa'
                    }, {
                        text: 'Funcionário',
                        field: 'funcionario',
                        width: 150
                    }, {
                        text: 'Data',
                        field: 'data',
                        width: 150
                    },
                    {
                        text: 'Vel. Max.',
                        field: 'vel_maxima',
                        width: 150
                    },
                    {
                        text: 'Vel. Reg.',
                        field: 'vel_reg',
                        width: 150
                    },
                    {
                        text: 'Dif. Vel.',
                        field: 'dif_vel',
                        width: 150
                    },
                    {
                        text: 'Longitude',
                        field: 'longitude',
                        width: 150
                    },
                    {
                        text: 'Latitude',
                        field: 'latitude',
                        width: 150
                    }
                ]
            });
        },
        
    buscar: function () {
            Cmp.showLoading();

            Cmp.request({
                url: 'index.php?mdl=relVeiculoVelocidade&file=ds_veiculo_velocidade.php',
                params: {
                    placa: Cmp.get('inputPlaca').getValue()
                },
                success: function (res) {
                    Cmp.hideLoading();
                    if (res.status == 'success') {
                        Cmp.get('gridDadosVeiculosVelocidade').loadData(res.data);
                    } else {
                        Cmp.showErrorMessage(res.message || 'Ocorreu um erro na requisição');
                    }
                }
            });
        }

    };

    this.init = function () {
        private.render();
    }

}
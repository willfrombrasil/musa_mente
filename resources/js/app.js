$(document).ready(function() {
    try {
        $('#section0').show();
        $('#section1').hide();
        $('#section2').hide();
        $('#section3').hide();
        $('#section4').hide();
        $('#section5').hide();
        $('#section6').hide();
        $('#section7').hide();
        $('#section8').hide();
        $('#section9').hide();
        $('#section10').hide();
        $('#section11').hide();
        $('#section12').hide();
        $('#section13').hide();
        $('#section14').hide();
        $('#section15').hide();

    } catch (error) {
        console.log(error);
    }

    $('#btnAvancar0').click(function() {
        try {
            $('#section0').hide();
            $('#section1').show();
            $('#section2').hide();
            $('#section3').hide();
            $('#section4').hide();
            $('#section5').hide();
            $('#section6').hide();
            $('#section7').hide();
            $('#section8').hide();
            $('#section9').hide();
            $('#section10').hide();
            $('#section11').hide();
            $('#section12').hide();
            $('#section13').hide();
            $('#section14').hide();
            $('#section15').hide();

        } catch (error) {
            console.log(error);
        }

    });

    //ação botão avançar seção 1
    $('#btnAvancar1').click(function() {
        try {
            if ($("input[name='qst1']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão A',
                    text: 'Selecione uma das opções válida para questão A.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question1 = null;
                if (Number(question1) != null) {
                    $("input[name='qst1']:checked").each(function() {
                        question1 = Number($(this).val());
                        $("input[name='question1']").val(question1);
                    });
                }
            }

            if ($("input[name='qst2']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão B',
                    text: 'Selecione uma das opções válida para questão B.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question2 = null;
                if (Number(question2) != null) {
                    $("input[name='qst2']:checked").each(function() {
                        question2 = Number($(this).val());
                        $("input[name='question2']").val(question2);
                    });
                }
            }

            if ($("input[name='qst3']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão C',
                    text: 'Selecione uma das opções válida para questão C.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question3 = null;
                if (Number(question3) != null) {
                    $("input[name='qst3']:checked").each(function() {
                        question3 = Number($(this).val());
                        $("input[name='question3']").val(question3);
                    });
                }
            }

            if ($("input[name='qst4']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão D',
                    text: 'Selecione uma das opções válida para questão D.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question4 = null;
                if (Number(question4) != null) {
                    $("input[name='qst4']:checked").each(function() {
                        question4 = Number($(this).val());
                        $("input[name='question4']").val(question4);
                    });
                }
            }

            if ($("input[name='qst5']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão E',
                    text: 'Selecione uma das opções válida para questão E.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question5 = null;
                if (Number(question5) != null) {
                    $("input[name='qst5']:checked").each(function() {
                        question5 = Number($(this).val());
                        $("input[name='question5']").val(question5);
                    });
                }
            }

            if ($("input[name='qst6']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão F',
                    text: 'Selecione uma das opções válida para questão F.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question6 = null;
                if (Number(question6) != null) {
                    $("input[name='qst6']:checked").each(function() {
                        question6 = Number($(this).val());
                        $("input[name='question6']").val(question6);
                    });
                }
            }

            $('#section0').hide();
            $('#section1').hide();
            $('#section2').show();
            $('#section3').hide();
            $('#section4').hide();
            $('#section5').hide();
            $('#section6').hide();
            $('#section7').hide();
            $('#section8').hide();
            $('#section9').hide();
            $('#section10').hide();
            $('#section11').hide();
            $('#section12').hide();
            $('#section13').hide();
            $('#section14').hide();
            $('#section15').hide();

        } catch (error) {
            console.log(error);
        }
    });


    //ação botão avançar seção 2
    $('#btnAvancar2').click(function() {
        try {
            if ($("input[name='qst7']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão A',
                    text: 'Selecione uma das opções válida para questão A.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question7 = null;
                if (Number(question7) != null) {
                    $("input[name='qst7']:checked").each(function() {
                        question7 = Number($(this).val());
                        $("input[name='question7']").val(question7);
                    });
                }
            }

            if ($("input[name='qst8']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão B',
                    text: 'Selecione uma das opções válida para questão B.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question8 = null;
                if (Number(question8) != null) {
                    $("input[name='qst8']:checked").each(function() {
                        question8 = Number($(this).val());
                        $("input[name='question8']").val(question8);
                    });
                }
            }

            if ($("input[name='qst9']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão C',
                    text: 'Selecione uma das opções válida para questão C.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question9 = null;
                if (Number(question9) != null) {
                    $("input[name='qst9']:checked").each(function() {
                        question9 = Number($(this).val());
                        $("input[name='question9']").val(question9);
                    });
                }
            }

            if ($("input[name='qst10']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão D',
                    text: 'Selecione uma das opções válida para questão D.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question10 = null;
                if (Number(question10) != null) {
                    $("input[name='qst10']:checked").each(function() {
                        question10 = Number($(this).val());
                        $("input[name='question10']").val(question10);
                    });
                }
            }

            if ($("input[name='qst11']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão F',
                    text: 'Selecione uma das opções válida para questão F.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question11 = null;
                if (Number(question11) != null) {
                    $("input[name='qst11']:checked").each(function() {
                        question11 = Number($(this).val());
                        $("input[name='question11']").val(question11);
                    });
                }
            }

            if ($("input[name='qst12']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão F',
                    text: 'Selecione uma das opções válida para questão F.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question12 = null;
                if (Number(question12) != null) {
                    $("input[name='qst12']:checked").each(function() {
                        question12 = Number($(this).val());
                        $("input[name='question12']").val(question12);
                    });
                }
            }

            $('#section0').hide();
            $('#section1').hide();
            $('#section2').hide();
            $('#section3').show();
            $('#section4').hide();
            $('#section5').hide();
            $('#section6').hide();
            $('#section7').hide();
            $('#section8').hide();
            $('#section9').hide();
            $('#section10').hide();
            $('#section11').hide();
            $('#section12').hide();
            $('#section13').hide();
            $('#section14').hide();
            $('#section15').hide();

        } catch (error) {
            console.log(error);
        }

    });

    //ação botão avançar seção 3
    $('#btnAvancar3').click(function() {
        try {
            if ($("input[name='qst13']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão A',
                    text: 'Selecione uma das opções válida para questão A.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question13 = null;
                if (Number(question13) != null) {
                    $("input[name='qst13']:checked").each(function() {
                        question13 = Number($(this).val());
                        $("input[name='question13']").val(question13);
                    });
                }
            }

            if ($("input[name='qst14']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão B',
                    text: 'Selecione uma das opções válida para questão B.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question14 = null;
                if (Number(question14) != null) {
                    $("input[name='qst14']:checked").each(function() {
                        question14 = Number($(this).val());
                        $("input[name='question14']").val(question14);
                    });
                }
            }

            if ($("input[name='qst15']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão C',
                    text: 'Selecione uma das opções válida para questão C.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question15 = null;
                if (Number(question15) != null) {
                    $("input[name='qst15']:checked").each(function() {
                        question15 = Number($(this).val());
                        $("input[name='question15']").val(question15);
                    });
                }
            }

            if ($("input[name='qst16']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão D',
                    text: 'Selecione uma das opções válida para questão D.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question16 = null;
                if (Number(question16) != null) {
                    $("input[name='qst16']:checked").each(function() {
                        question16 = Number($(this).val());
                        $("input[name='question16']").val(question16);
                    });
                }
            }

            if ($("input[name='qst17']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão E',
                    text: 'Selecione uma das opções válida para questão E.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question17 = null;
                if (Number(question17) != null) {
                    $("input[name='qst17']:checked").each(function() {
                        question17 = Number($(this).val());
                        $("input[name='question17']").val(question17);
                    });
                }
            }

            if ($("input[name='qst18']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão F',
                    text: 'Selecione uma das opções válida para questão F.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question18 = null;
                if (Number(question18) != null) {
                    $("input[name='qst18']:checked").each(function() {
                        question18 = Number($(this).val());
                        $("input[name='question18']").val(question18);
                    });
                }
            }

            $('#section0').hide();
            $('#section1').hide();
            $('#section2').hide();
            $('#section3').hide();
            $('#section4').show();
            $('#section5').hide();
            $('#section6').hide();
            $('#section7').hide();
            $('#section8').hide();
            $('#section9').hide();
            $('#section10').hide();
            $('#section11').hide();
            $('#section12').hide();
            $('#section13').hide();
            $('#section14').hide();
            $('#section15').hide();

        } catch (error) {
            console.log(error);
        }
    });

    //ação botão avançar seção 4
    $('#btnAvancar4').click(function() {
        try {
            if ($("input[name='qst19']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão A',
                    text: 'Selecione uma das opções válida para questão A.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question19 = null;
                if (Number(question19) != null) {
                    $("input[name='qst19']:checked").each(function() {
                        question19 = Number($(this).val());
                        $("input[name='question19']").val(question19);
                    });
                }
            }

            if ($("input[name='qst20']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão B',
                    text: 'Selecione uma das opções válida para questão B.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question20 = null;
                if (Number(question20) != null) {
                    $("input[name='qst20']:checked").each(function() {
                        question20 = Number($(this).val());
                        $("input[name='question20']").val(question20);
                    });
                }
            }

            if ($("input[name='qst21']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão C',
                    text: 'Selecione uma das opções válida para questão C.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question21 = null;
                if (Number(question21) != null) {
                    $("input[name='qst21']:checked").each(function() {
                        question21 = Number($(this).val());
                        $("input[name='question21']").val(question21);
                    });
                }
            }

            if ($("input[name='qst22']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão D',
                    text: 'Selecione uma das opções válida para questão D.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question22 = null;
                if (Number(question22) != null) {
                    $("input[name='qst22']:checked").each(function() {
                        question22 = Number($(this).val());
                        $("input[name='question22']").val(question22);
                    });
                }
            }

            if ($("input[name='qst23']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão E',
                    text: 'Selecione uma das opções válida para questão E.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question23 = null;
                if (Number(question23) != null) {
                    $("input[name='qst23']:checked").each(function() {
                        question23 = Number($(this).val());
                        $("input[name='question23']").val(question23);
                    });
                }
            }

            if ($("input[name='qst24']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão F',
                    text: 'Selecione uma das opções válida para questão F.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question24 = null;
                if (Number(question24) != null) {
                    $("input[name='qst24']:checked").each(function() {
                        question24 = Number($(this).val());
                        $("input[name='question24']").val(question24);
                    });
                }
            }

            $('#section0').hide();
            $('#section1').hide();
            $('#section2').hide();
            $('#section3').hide();
            $('#section4').hide();
            $('#section5').show();
            $('#section6').hide();
            $('#section7').hide();
            $('#section8').hide();
            $('#section9').hide();
            $('#section10').hide();
            $('#section11').hide();
            $('#section12').hide();
            $('#section13').hide();
            $('#section14').hide();
            $('#section15').hide();

        } catch (error) {
            console.log(error);
        }

    });

    //ação botão avançar seção 5
    $('#btnAvancar5').click(function() {
        try {
            if ($("input[name='qst25']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão A',
                    text: 'Selecione uma das opções válida para questão A.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question25 = null;
                if (Number(question25) != null) {
                    $("input[name='qst25']:checked").each(function() {
                        question25 = Number($(this).val());
                        $("input[name='question25']").val(question25);
                    });
                }
            }

            if ($("input[name='qst26']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão B',
                    text: 'Selecione uma das opções válida para questão B.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question26 = null;
                if (Number(question26) != null) {
                    $("input[name='qst26']:checked").each(function() {
                        question26 = Number($(this).val());
                        $("input[name='question26']").val(question26);
                    });
                }
            }

            if ($("input[name='qst27']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão C',
                    text: 'Selecione uma das opções válida para questão C.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question27 = null;
                if (Number(question27) != null) {
                    $("input[name='qst27']:checked").each(function() {
                        question27 = Number($(this).val());
                        $("input[name='question27']").val(question27);
                    });
                }
            }

            if ($("input[name='qst28']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão D',
                    text: 'Selecione uma das opções válida para questão D.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question28 = null;
                if (Number(question28) != null) {
                    $("input[name='qst28']:checked").each(function() {
                        question28 = Number($(this).val());
                        $("input[name='question28']").val(question28);
                    });
                }
            }

            if ($("input[name='qst29']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão E',
                    text: 'Selecione uma das opções válida para questão E.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question29 = null;
                if (Number(question29) != null) {
                    $("input[name='qst29']:checked").each(function() {
                        question29 = Number($(this).val());
                        $("input[name='question29']").val(question29);
                    });
                }
            }

            if ($("input[name='qst30']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão F',
                    text: 'Selecione uma das opções válida para questão F.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question30 = null;
                if (Number(question30) != null) {
                    $("input[name='qst30']:checked").each(function() {
                        question30 = Number($(this).val());
                        $("input[name='question30']").val(question30);
                    });
                }
            }

            $('#section0').hide();
            $('#section1').hide();
            $('#section2').hide();
            $('#section3').hide();
            $('#section4').hide();
            $('#section5').hide();
            $('#section6').show();
            $('#section7').hide();
            $('#section8').hide();
            $('#section9').hide();
            $('#section10').hide();
            $('#section11').hide();
            $('#section12').hide();
            $('#section13').hide();
            $('#section14').hide();
            $('#section15').hide();

        } catch (error) {
            console.log(error);
        }
    });

    //ação botão avançar seção 6
    $('#btnAvancar6').click(function() {
        try {
            if ($("input[name='qst31']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão A',
                    text: 'Selecione uma das opções válida para questão A.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question31 = null;
                if (Number(question31) != null) {
                    $("input[name='qst31']:checked").each(function() {
                        question31 = Number($(this).val());
                        $("input[name='question31']").val(question31);
                    });
                }
            }

            if ($("input[name='qst32']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão B',
                    text: 'Selecione uma das opções válida para questão B.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question32 = null;
                if (Number(question32) != null) {
                    $("input[name='qst32']:checked").each(function() {
                        question32 = Number($(this).val());
                        $("input[name='question32']").val(question32);
                    });
                }
            }

            if ($("input[name='qst33']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão C',
                    text: 'Selecione uma das opções válida para questão C.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question33 = null;
                if (Number(question33) != null) {
                    $("input[name='qst33']:checked").each(function() {
                        question33 = Number($(this).val());
                        $("input[name='question33']").val(question33);
                    });
                }
            }

            if ($("input[name='qst34']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão D',
                    text: 'Selecione uma das opções válida para questão D.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question34 = null;
                if (Number(question34) != null) {
                    $("input[name='qst34']:checked").each(function() {
                        question34 = Number($(this).val());
                        $("input[name='question34']").val(question34);
                    });
                }
            }

            if ($("input[name='qst35']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão E',
                    text: 'Selecione uma das opções válida para questão E.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question35 = null;
                if (Number(question35) != null) {
                    $("input[name='qst35']:checked").each(function() {
                        question35 = Number($(this).val());
                        $("input[name='question35']").val(question35);
                    });
                }
            }

            if ($("input[name='qst36']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão F',
                    text: 'Selecione uma das opções válida para questão F.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question36 = null;
                if (Number(question36) != null) {
                    $("input[name='qst36']:checked").each(function() {
                        question36 = Number($(this).val());
                        $("input[name='question36']").val(question36);
                    });
                }
            }

            $('#section0').hide();
            $('#section1').hide();
            $('#section2').hide();
            $('#section3').hide();
            $('#section4').hide();
            $('#section5').hide();
            $('#section6').hide();
            $('#section7').show();
            $('#section8').hide();
            $('#section9').hide();
            $('#section10').hide();
            $('#section11').hide();
            $('#section12').hide();
            $('#section13').hide();
            $('#section14').hide();
            $('#section15').hide();

        } catch (error) {
            console.log(error);
        }
    });

    //ação botão avançar seção 7
    $('#btnAvancar7').click(function() {
        try {
            if ($("input[name='qst37']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão A',
                    text: 'Selecione uma das opções válida para questão A.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question37 = null;
                if (Number(question37) != null) {
                    $("input[name='qst37']:checked").each(function() {
                        question37 = Number($(this).val());
                        $("input[name='question37']").val(question37);
                    });
                }
            }

            if ($("input[name='qst38']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão B',
                    text: 'Selecione uma das opções válida para questão B.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question38 = null;
                if (Number(question38) != null) {
                    $("input[name='qst38']:checked").each(function() {
                        question38 = Number($(this).val());
                        $("input[name='question38']").val(question38);
                    });
                }
            }

            if ($("input[name='qst39']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão C',
                    text: 'Selecione uma das opções válida para questão C.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question39 = null;
                if (Number(question39) != null) {
                    $("input[name='qst39']:checked").each(function() {
                        question39 = Number($(this).val());
                        $("input[name='question39']").val(question39);
                    });
                }
            }

            if ($("input[name='qst40']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão D',
                    text: 'Selecione uma das opções válida para questão D.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question40 = null;
                if (Number(question40) != null) {
                    $("input[name='qst40']:checked").each(function() {
                        question40 = Number($(this).val());
                        $("input[name='question40']").val(question40);
                    });
                }
            }

            if ($("input[name='qst41']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão E',
                    text: 'Selecione uma das opções válida para questão E.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question41 = null;
                if (Number(question41) != null) {
                    $("input[name='qst41']:checked").each(function() {
                        question41 = Number($(this).val());
                        $("input[name='question41']").val(question41);
                    });
                }
            }

            if ($("input[name='qst42']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão F',
                    text: 'Selecione uma das opções válida para questão F.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question42 = null;
                if (Number(question42) != null) {
                    $("input[name='qst42']:checked").each(function() {
                        question42 = Number($(this).val());
                        $("input[name='question42']").val(question42);
                    });
                }
            }

            $('#section0').hide();
            $('#section1').hide();
            $('#section2').hide();
            $('#section3').hide();
            $('#section4').hide();
            $('#section5').hide();
            $('#section6').hide();
            $('#section7').hide();
            $('#section8').show();
            $('#section9').hide();
            $('#section10').hide();
            $('#section11').hide();
            $('#section12').hide();
            $('#section13').hide();
            $('#section14').hide();
            $('#section15').hide();

        } catch (error) {
            console.log(error);
        }
    });

    //ação botão avançar seção 8
    $('#btnAvancar8').click(function() {
        try {
            if ($("input[name='qst43']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão A',
                    text: 'Selecione uma das opções válida para questão A.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question43 = null;
                if (Number(question43) != null) {
                    $("input[name='qst43']:checked").each(function() {
                        question43 = Number($(this).val());
                        $("input[name='question43']").val(question43);
                    });
                }
            }

            if ($("input[name='qst44']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão B',
                    text: 'Selecione uma das opções válida para questão B.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question44 = null;
                if (Number(question44) != null) {
                    $("input[name='qst44']:checked").each(function() {
                        question44 = Number($(this).val());
                        $("input[name='question44']").val(question44);
                    });
                }
            }

            if ($("input[name='qst45']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão C',
                    text: 'Selecione uma das opções válida para questão C.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question45 = null;
                if (Number(question45) != null) {
                    $("input[name='qst45']:checked").each(function() {
                        question45 = Number($(this).val());
                        $("input[name='question45']").val(question45);
                    });
                }
            }

            if ($("input[name='qst46']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão D',
                    text: 'Selecione uma das opções válida para questão D.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question46 = null;
                if (Number(question46) != null) {
                    $("input[name='qst46']:checked").each(function() {
                        question46 = Number($(this).val());
                        $("input[name='question46']").val(question46);
                    });
                }
            }

            if ($("input[name='qst47']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão E',
                    text: 'Selecione uma das opções válida para questão E.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question47 = null;
                if (Number(question47) != null) {
                    $("input[name='qst47']:checked").each(function() {
                        question47 = Number($(this).val());
                        $("input[name='question47']").val(question47);
                    });
                }
            }

            if ($("input[name='qst48']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão F',
                    text: 'Selecione uma das opções válida para questão F.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question48 = null;
                if (Number(question48) != null) {
                    $("input[name='qst48']:checked").each(function() {
                        question48 = Number($(this).val());
                        $("input[name='question48']").val(question48);
                    });
                }
            }

            $('#section0').hide();
            $('#section1').hide();
            $('#section2').hide();
            $('#section3').hide();
            $('#section4').hide();
            $('#section5').hide();
            $('#section6').hide();
            $('#section7').hide();
            $('#section8').hide();
            $('#section9').show();
            $('#section10').hide();
            $('#section11').hide();
            $('#section12').hide();
            $('#section13').hide();
            $('#section14').hide();
            $('#section15').hide();

        } catch (error) {
            console.log(error);
        }
    });

    //ação botão avançar seção 9
    $('#btnAvancar9').click(function() {
        try {
            if ($("input[name='qst49']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão A',
                    text: 'Selecione uma das opções válida para questão A.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question49 = null;
                if (Number(question49) != null) {
                    $("input[name='qst49']:checked").each(function() {
                        question49 = Number($(this).val());
                        $("input[name='question49']").val(question49);
                    });
                }
            }

            if ($("input[name='qst50']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão B',
                    text: 'Selecione uma das opções válida para questão B.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question50 = null;
                if (Number(question50) != null) {
                    $("input[name='qst50']:checked").each(function() {
                        question50 = Number($(this).val());
                        $("input[name='question50']").val(question50);
                    });
                }
            }

            if ($("input[name='qst51']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão C',
                    text: 'Selecione uma das opções válida para questão C.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question51 = null;
                if (Number(question51) != null) {
                    $("input[name='qst51']:checked").each(function() {
                        question51 = Number($(this).val());
                        $("input[name='question51']").val(question51);
                    });
                }
            }

            if ($("input[name='qst52']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão D',
                    text: 'Selecione uma das opções válida para questão D.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question52 = null;
                if (Number(question52) != null) {
                    $("input[name='qst52']:checked").each(function() {
                        question52 = Number($(this).val());
                        $("input[name='question52']").val(question52);
                    });
                }
            }

            if ($("input[name='qst53']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão E',
                    text: 'Selecione uma das opções válida para questão E.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question53 = null;
                if (Number(question53) != null) {
                    $("input[name='qst53']:checked").each(function() {
                        question53 = Number($(this).val());
                        $("input[name='question53']").val(question53);
                    });
                }
            }

            if ($("input[name='qst54']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão F',
                    text: 'Selecione uma das opções válida para questão F.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question54 = null;
                if (Number(question54) != null) {
                    $("input[name='qst54']:checked").each(function() {
                        question54 = Number($(this).val());
                        $("input[name='question54']").val(question54);
                    });
                }
            }

            $('#section0').hide();
            $('#section1').hide();
            $('#section2').hide();
            $('#section3').hide();
            $('#section4').hide();
            $('#section5').hide();
            $('#section6').hide();
            $('#section7').hide();
            $('#section8').hide();
            $('#section9').hide();
            $('#section10').show();
            $('#section11').hide();
            $('#section12').hide();
            $('#section13').hide();
            $('#section14').hide();
            $('#section15').hide();

        } catch (error) {
            console.log(error);
        }
    });

    //ação botão avançar seção 10
    $('#btnAvancar10').click(function() {
        try {
            if ($("input[name='qst55']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão A',
                    text: 'Selecione uma das opções válida para questão A.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question55 = null;
                if (Number(question55) != null) {
                    $("input[name='qst55']:checked").each(function() {
                        question55 = Number($(this).val());
                        $("input[name='question55']").val(question55);
                    });
                }
            }

            if ($("input[name='qst56']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão B',
                    text: 'Selecione uma das opções válida para questão B.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question56 = null;
                if (Number(question56) != null) {
                    $("input[name='qst56']:checked").each(function() {
                        question56 = Number($(this).val());
                        $("input[name='question56']").val(question56);
                    });
                }
            }

            if ($("input[name='qst57']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão C',
                    text: 'Selecione uma das opções válida para questão C.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question57 = null;
                if (Number(question57) != null) {
                    $("input[name='qst57']:checked").each(function() {
                        question57 = Number($(this).val());
                        $("input[name='question57']").val(question57);
                    });
                }
            }

            if ($("input[name='qst58']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão D',
                    text: 'Selecione uma das opções válida para questão D.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question58 = null;
                if (Number(question58) != null) {
                    $("input[name='qst58']:checked").each(function() {
                        question58 = Number($(this).val());
                        $("input[name='question58']").val(question58);
                    });
                }
            }

            if ($("input[name='qst59']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão E',
                    text: 'Selecione uma das opções válida para questão E.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question59 = null;
                if (Number(question59) != null) {
                    $("input[name='qst59']:checked").each(function() {
                        question59 = Number($(this).val());
                        $("input[name='question59']").val(question59);
                    });
                }
            }

            if ($("input[name='qst60']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão F',
                    text: 'Selecione uma das opções válida para questão F.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question60 = null;
                if (Number(question60) != null) {
                    $("input[name='qst60']:checked").each(function() {
                        question60 = Number($(this).val());
                        $("input[name='question60']").val(question60);
                    });
                }
            }

            $('#section0').hide();
            $('#section1').hide();
            $('#section2').hide();
            $('#section3').hide();
            $('#section4').hide();
            $('#section5').hide();
            $('#section6').hide();
            $('#section7').hide();
            $('#section8').hide();
            $('#section9').hide();
            $('#section10').hide();
            $('#section11').show();
            $('#section12').hide();
            $('#section13').hide();
            $('#section14').hide();
            $('#section15').hide();

        } catch (error) {
            console.log(error);
        }
    });

    //ação botão avançar seção 11
    $('#btnAvancar11').click(function() {
        try {
            if ($("input[name='qst61']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão A',
                    text: 'Selecione uma das opções válida para questão A.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question61 = null;
                if (Number(question61) != null) {
                    $("input[name='qst61']:checked").each(function() {
                        question61 = Number($(this).val());
                        $("input[name='question61']").val(question61);
                    });
                }
            }

            if ($("input[name='qst62']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão B',
                    text: 'Selecione uma das opções válida para questão B.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question62 = null;
                if (Number(question62) != null) {
                    $("input[name='qst62']:checked").each(function() {
                        question62 = Number($(this).val());
                        $("input[name='question62']").val(question62);
                    });
                }
            }

            if ($("input[name='qst63']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão C',
                    text: 'Selecione uma das opções válida para questão C.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question63 = null;
                if (Number(question63) != null) {
                    $("input[name='qst63']:checked").each(function() {
                        question63 = Number($(this).val());
                        $("input[name='question63']").val(question63);
                    });
                }
            }

            if ($("input[name='qst64']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão D',
                    text: 'Selecione uma das opções válida para questão D.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question64 = null;
                if (Number(question64) != null) {
                    $("input[name='qst64']:checked").each(function() {
                        question64 = Number($(this).val());
                        $("input[name='question64']").val(question64);
                    });
                }
            }

            if ($("input[name='qst65']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão E',
                    text: 'Selecione uma das opções válida para questão E.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question65 = null;
                if (Number(question65) != null) {
                    $("input[name='qst65']:checked").each(function() {
                        question65 = Number($(this).val());
                        $("input[name='question65']").val(question65);
                    });
                }
            }

            if ($("input[name='qst66']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão F',
                    text: 'Selecione uma das opções válida para questão F.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question66 = null;
                if (Number(question66) != null) {
                    $("input[name='qst66']:checked").each(function() {
                        question66 = Number($(this).val());
                        $("input[name='question66']").val(question66);
                    });
                }
            }

            $('#section0').hide();
            $('#section1').hide();
            $('#section2').hide();
            $('#section3').hide();
            $('#section4').hide();
            $('#section5').hide();
            $('#section6').hide();
            $('#section7').hide();
            $('#section8').hide();
            $('#section9').hide();
            $('#section10').hide();
            $('#section11').hide();
            $('#section12').show();
            $('#section13').hide();
            $('#section14').hide();
            $('#section15').hide();

        } catch (error) {
            console.log(error);
        }
    });

    //ação botão avançar seção 12
    $('#btnAvancar12').click(function() {
        try {
            if ($("input[name='qst67']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão A',
                    text: 'Selecione uma das opções válida para questão A.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question67 = null;
                if (Number(question67) != null) {
                    $("input[name='qst67']:checked").each(function() {
                        question67 = Number($(this).val());
                        $("input[name='question67']").val(question67);
                    });
                }
            }

            if ($("input[name='qst68']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão B',
                    text: 'Selecione uma das opções válida para questão B.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question68 = null;
                if (Number(question68) != null) {
                    $("input[name='qst68']:checked").each(function() {
                        question68 = Number($(this).val());
                        $("input[name='question68']").val(question68);
                    });
                }
            }

            if ($("input[name='qst69']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão C',
                    text: 'Selecione uma das opções válida para questão C.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question69 = null;
                if (Number(question69) != null) {
                    $("input[name='qst69']:checked").each(function() {
                        question69 = Number($(this).val());
                        $("input[name='question69']").val(question69);
                    });
                }
            }

            if ($("input[name='qst70']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão D',
                    text: 'Selecione uma das opções válida para questão D.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question70 = null;
                if (Number(question70) != null) {
                    $("input[name='qst70']:checked").each(function() {
                        question70 = Number($(this).val());
                        $("input[name='question70']").val(question70);
                    });
                }
            }

            if ($("input[name='qst71']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão E',
                    text: 'Selecione uma das opções válida para questão E.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question71 = null;
                if (Number(question71) != null) {
                    $("input[name='qst71']:checked").each(function() {
                        question71 = Number($(this).val());
                        $("input[name='question71']").val(question71);
                    });
                }
            }

            if ($("input[name='qst72']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão F',
                    text: 'Selecione uma das opções válida para questão F.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question72 = null;
                if (Number(question72) != null) {
                    $("input[name='qst72']:checked").each(function() {
                        question72 = Number($(this).val());
                        $("input[name='question72']").val(question72);
                    });
                }
            }

            $('#section0').hide();
            $('#section1').hide();
            $('#section2').hide();
            $('#section3').hide();
            $('#section4').hide();
            $('#section5').hide();
            $('#section6').hide();
            $('#section7').hide();
            $('#section8').hide();
            $('#section9').hide();
            $('#section10').hide();
            $('#section11').hide();
            $('#section12').hide();
            $('#section13').show();
            $('#section14').hide();
            $('#section15').hide();

        } catch (error) {
            console.log(error);
        }
    });

    //ação botão avançar seção 13
    $('#btnAvancar13').click(function() {
        try {
            if ($("input[name='qst73']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão A',
                    text: 'Selecione uma das opções válida para questão A.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question73 = null;
                if (Number(question73) != null) {
                    $("input[name='qst73']:checked").each(function() {
                        question73 = Number($(this).val());
                        $("input[name='question73']").val(question73);
                    });
                }
            }

            if ($("input[name='qst74']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão B',
                    text: 'Selecione uma das opções válida para questão B.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question74 = null;
                if (Number(question74) != null) {
                    $("input[name='qst74']:checked").each(function() {
                        question74 = Number($(this).val());
                        $("input[name='question74']").val(question74);
                    });
                }
            }

            if ($("input[name='qst75']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão C',
                    text: 'Selecione uma das opções válida para questão C.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question75 = null;
                if (Number(question75) != null) {
                    $("input[name='qst75']:checked").each(function() {
                        question75 = Number($(this).val());
                        $("input[name='question75']").val(question75);
                    });
                }
            }

            if ($("input[name='qst76']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão D',
                    text: 'Selecione uma das opções válida para questão D.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question76 = null;
                if (Number(question76) != null) {
                    $("input[name='qst76']:checked").each(function() {
                        question76 = Number($(this).val());
                        $("input[name='question76']").val(question76);
                    });
                }
            }

            if ($("input[name='qst77']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão E',
                    text: 'Selecione uma das opções válida para questão E.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question77 = null;
                if (Number(question77) != null) {
                    $("input[name='qst77']:checked").each(function() {
                        question77 = Number($(this).val());
                        $("input[name='question77']").val(question77);
                    });
                }
            }

            if ($("input[name='qst78']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão F',
                    text: 'Selecione uma das opções válida para questão F.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question78 = null;
                if (Number(question78) != null) {
                    $("input[name='qst78']:checked").each(function() {
                        question78 = Number($(this).val());
                        $("input[name='question78']").val(question78);
                    });
                }
            }

            $('#section0').hide();
            $('#section1').hide();
            $('#section2').hide();
            $('#section3').hide();
            $('#section4').hide();
            $('#section5').hide();
            $('#section6').hide();
            $('#section7').hide();
            $('#section8').hide();
            $('#section9').hide();
            $('#section10').hide();
            $('#section11').hide();
            $('#section12').hide();
            $('#section13').hide();
            $('#section14').show();
            $('#section15').hide();

        } catch (error) {
            console.log(error);
        }
    });

    //ação botão avançar seção 14
    $('#btnAvancar14').click(function() {
        try {
            if ($("input[name='qst79']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão A',
                    text: 'Selecione uma das opções válida para questão A.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question79 = null;
                if (Number(question79) != null) {
                    $("input[name='qst79']:checked").each(function() {
                        question79 = Number($(this).val());
                        $("input[name='question79']").val(question79);
                    });
                }
            }

            if ($("input[name='qst80']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão B',
                    text: 'Selecione uma das opções válida para questão B.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question80 = null;
                if (Number(question80) != null) {
                    $("input[name='qst80']:checked").each(function() {
                        question80 = Number($(this).val());
                        $("input[name='question80']").val(question80);
                    });
                }
            }

            if ($("input[name='qst81']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão C',
                    text: 'Selecione uma das opções válida para questão C.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question81 = null;
                if (Number(question81) != null) {
                    $("input[name='qst81']:checked").each(function() {
                        question81 = Number($(this).val());
                        $("input[name='question81']").val(question81);
                    });
                }
            }

            if ($("input[name='qst82']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão D',
                    text: 'Selecione uma das opções válida para questão D.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question82 = null;
                if (Number(question82) != null) {
                    $("input[name='qst82']:checked").each(function() {
                        question82 = Number($(this).val());
                        $("input[name='question82']").val(question82);
                    });
                }
            }

            if ($("input[name='qst83']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão E',
                    text: 'Selecione uma das opções válida para questão E.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question83 = null;
                if (Number(question83) != null) {
                    $("input[name='qst83']:checked").each(function() {
                        question83 = Number($(this).val());
                        $("input[name='question83']").val(question83);
                    });
                }
            }

            if ($("input[name='qst84']:checked").val() == undefined) {
                Swal.fire({
                    title: 'Selecione uma resposta para questão F',
                    text: 'Selecione uma das opções válida para questão F.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            } else {
                var question84 = null;
                if (Number(question84) != null) {
                    $("input[name='qst84']:checked").each(function() {
                        question84 = Number($(this).val());
                        $("input[name='question84']").val(question84);
                    });
                }
            }

            $('#section0').hide();
            $('#section1').hide();
            $('#section2').hide();
            $('#section3').hide();
            $('#section4').hide();
            $('#section5').hide();
            $('#section6').hide();
            $('#section7').hide();
            $('#section8').hide();
            $('#section9').hide();
            $('#section10').hide();
            $('#section11').hide();
            $('#section12').hide();
            $('#section13').hide();
            $('#section14').hide();
            $('#section15').show();

        } catch (error) {
            console.log(error);
        }
    });

    // ação botão finalizar seção 15
    $('#finalizar').click(function() {
        try {
            let arr = [undefined, false, null, "", " "];
            let nome = valida_nome($("input[name='nome']").val());
            let email = valida_email($("input[name='email']").val());
            let fone = valida_fone($("input[name='fone']").val());

            console.log(nome);
            console.log(email);
            console.log(fone);

            if (jQuery.inArray(nome, arr) != -1) {
                Swal.fire({
                    title: 'Nome não identificado',
                    text: 'Informe um NOME válido para receber o resultado do teste.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            }

            if (nome.length <= 3) {
                Swal.fire({
                    title: 'Nome Inválido',
                    text: 'Informe um NOME válido com mais de 5 caracteres.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            }

            if (!isEmail(email)) {
                Swal.fire({
                    title: 'Endereço de Email não identificado',
                    text: 'Informe um EMAIL válido para receber o resultado do teste.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            }


            if (jQuery.inArray(email, arr) != -1) {
                Swal.fire({
                    title: 'Endereço de Email inválido',
                    text: 'Informe um EMAIL válido para receber o resultado do teste.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            }


            if (jQuery.inArray(fone, arr) != -1) {
                Swal.fire({
                    title: 'Telefone não identificado',
                    text: 'Informe um TELEFONE válido com WatsApp para receber contato.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            }


            if (fone.length < 11) {
                Swal.fire({
                    title: 'Número de Telefone inválido',
                    text: 'Informe um número de Telefone com whatsapp válido para receber contato.',
                    icon: 'warning',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#3085d6',
                })
                return false;
            }

            $('#section0').hide();
            $('#section1').hide();
            $('#section2').hide();
            $('#section3').hide();
            $('#section4').hide();
            $('#section5').hide();
            $('#section6').hide();
            $('#section7').hide();
            $('#section8').hide();
            $('#section9').hide();
            $('#section10').hide();
            $('#section11').hide();
            $('#section12').hide();
            $('#section13').hide();
            $('#section14').hide();
            $('#section15').hide();

        } catch (error) {
            console.log(error);
        }
    });

    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    function valida_nome(nome) {
        let regex = /[^\s\wÀ-ÖØ-öø-ÿ]/g;

        return nome.replace(regex, '').trim();
    }

    function valida_email(email) {
        let regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        let testeMail = regex.test(email);

        return testeMail ? email.trim() : '';
    }

    function valida_fone(fone) {
        let regex = /[0-9]/g;

        let numerosFiltrados = fone.match(regex);

        return numerosFiltrados ? numerosFiltrados.join('').trim() : '';
    }

    $('#data_Table').DataTable({
        responsive: true,
        searching: false,
        bFilter: true,
        bLengthChange: true,
        paginate: false,
        //paging: true,
        //pagingType: "full_numbers",
        order: [
            [3, "desc"]
        ],
        language: {
            "emptyTable": "Nenhum registro encontrado",
            "info": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            // "infoEmpty": "Mostrando 0 até 0 de 0 registros",
            "infoFiltered": "(Filtrados de _MAX_ registros)",
            "infoThousands": ".",
            "loadingRecords": "Carregando...",
            "processing": "Processando...",
            "zeroRecords": "Nenhum registro encontrado",
            "search": "Pesquisar",
            "paginate": {
                "next": "Próximo",
                "previous": "Anterior",
                "first": "Primeiro",
                "last": "Último"
            },
            "aria": {
                "sortAscending": ": Ordenar colunas de forma ascendente",
                "sortDescending": ": Ordenar colunas de forma descendente"
            },
            "select": {
                "rows": {
                    "_": "Selecionado %d linhas",
                    "0": "Nenhuma linha selecionada",
                    "1": "Selecionado 1 linha"
                },
                "1": "%d linha selecionada",
                "_": "%d linhas selecionadas",
                "cells": {
                    "1": "1 célula selecionada",
                    "_": "%d células selecionadas"
                },
                "columns": {
                    "1": "1 coluna selecionada",
                    "_": "%d colunas selecionadas"
                }
            },
            "buttons": {
                "copySuccess": {
                    "1": "Uma linha copiada com sucesso",
                    "_": "%d linhas copiadas com sucesso"
                },
                "collection": "Coleção  <span class=\"ui-button-icon-primary ui-icon ui-icon-triangle-1-s\"><\/span>",
                "colvis": "Visibilidade da Coluna",
                "colvisRestore": "Restaurar Visibilidade",
                "copy": "Copiar",
                "copyKeys": "Pressione ctrl ou u2318 + C para copiar os dados da tabela para a área de transferência do sistema. Para cancelar, clique nesta mensagem ou pressione Esc..",
                "copyTitle": "Copiar para a Área de Transferência",
                "csv": "CSV",
                "excel": "Excel",
                "pageLength": {
                    "-1": "Mostrar todos os registros",
                    "1": "Mostrar 1 registro",
                    "_": "Mostrar %d registros"
                },
                "pdf": "PDF",
                "print": "Imprimir"
            },
            "autoFill": {
                "cancel": "Cancelar",
                "fill": "Preencher todas as células com",
                "fillHorizontal": "Preencher células horizontalmente",
                "fillVertical": "Preencher células verticalmente"
            },
            "lengthMenu": "Exibir _MENU_ resultados por página",
            "searchBuilder": {
                "add": "Adicionar Condição",
                "button": {
                    "0": "Construtor de Pesquisa",
                    "_": "Construtor de Pesquisa (%d)"
                },
                "clearAll": "Limpar Tudo",
                "condition": "Condição",
                "conditions": {
                    "date": {
                        "after": "Depois",
                        "before": "Antes",
                        "between": "Entre",
                        "empty": "Vazio",
                        "equals": "Igual",
                        "not": "Não",
                        "notBetween": "Não Entre",
                        "notEmpty": "Não Vazio"
                    },
                    "moment": {
                        "after": "Depois",
                        "before": "Antes",
                        "between": "Entre",
                        "empty": "Vazio",
                        "equals": "Igual",
                        "not": "Não",
                        "notBetween": "Não Entre",
                        "notEmpty": "Não Vazio"
                    },
                    "number": {
                        "between": "Entre",
                        "empty": "Vazio",
                        "equals": "Igual",
                        "gt": "Maior Que",
                        "gte": "Maior ou Igual a",
                        "lt": "Menor Que",
                        "lte": "Menor ou Igual a",
                        "not": "Não",
                        "notBetween": "Não Entre",
                        "notEmpty": "Não Vazio"
                    },
                    "string": {
                        "contains": "Contém",
                        "empty": "Vazio",
                        "endsWith": "Termina Com",
                        "equals": "Igual",
                        "not": "Não",
                        "notEmpty": "Não Vazio",
                        "startsWith": "Começa Com"
                    }
                },
                "data": "Data",
                "deleteTitle": "Excluir regra de filtragem",
                "logicAnd": "E",
                "logicOr": "Ou",
                "title": {
                    "0": "Construtor de Pesquisa",
                    "_": "Construtor de Pesquisa (%d)"
                },
                "value": "Valor"
            },
            "searchPanes": {
                "clearMessage": "Limpar Tudo",
                "collapse": {
                    "0": "Painéis de Pesquisa",
                    "_": "Painéis de Pesquisa (%d)"
                },
                "count": "{total}",
                "countFiltered": "{shown} ({total})",
                "emptyPanes": "Nenhum Painel de Pesquisa",
                "loadMessage": "Carregando Painéis de Pesquisa...",
                "title": "Filtros Ativos"
            },
            "searchPlaceholder": "Digite um termo para pesquisar",
            "thousands": "."
        },
    });

});
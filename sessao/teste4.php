<?php
require_once("/home/lorrana/fpdf181/fpdf.php");
 
$pdf= new FPDF("P","pt","A4");
 
$pdf->AddPage();
$pdf->SetFont('arial','B',12);
$pdf->Cell(0,5,"Desenvolvimento de Sistemas I",0,1,'L');
$pdf->Ln(8);
$pdf->Output();

/*
Na linha 1 incluimos a classe FPDF. Na linha 3 criamos o documento PDF com as seguintes configurações:

Orientação: “P” Paisagem – (poderia ser retrato “L” )

Unidade de medida: “pt” – a unidade e medida é utilizada pelos métodos de escrita no documento PDF para determinar a posição onde o conteúdo deve ser escrito. As unidades aceitas são “pt”, “mm”, “cm” e “in”.

Formato: “A4″ – O formato utilizado pelas páginas.

Na linha 5 adicionamos uma nova página ao documento(a página inicial).

Na linha 6 modificamos a fonte do documento para “arial”, negrito “B”, tamanho “12”. A partir de agora todo texto que escrevermos no documento PDF terá estas configurações.

Na linha 7 escrevemos uma célula(área retangular) de texto no documento. Na ordem as configurações desta célula são:

    Largura: Largura da célula(definidas pela unidade). Se 0, a célula se estende até a margem direita.
    Altura: Altura da célula (definidas pela unidade).
    Texto: Texto a ser impresso. Valor padrão: texto vazio.
    Borda: Indica se as bordas devem ser desenhadas em volta da célula. Os valores aceitos são 0(sem borda), 1(com borda). Também é possível definir quais bordas serão desenhadas pela combinação das seguintes letras:
    L: esquerda
    T: acima
    R: direita
    B: abaixo
    Nova linha: Indica onde a posição corrente deve ficar depois que a função for chamada. Os valores possíveis são:
    0: à direita
    1: no início da próxima linha
    2: abaixo
    Alinhamento Permite centralizar ou alinhar o texto. Os valores possíveis são: L(esquerda), C(centro), R(direita)

Na linha 8 temos uma quebra de linha com a altura de 8 unidades.

Na linha 9 mandamos o documento ser gerado e forçamos o download com o nome informado pelo primeiro argumento.Outras opções seriam:

    I: envia o arquivo diretamente para o browser. Se o plug-in estiver instalado ele será usado. O nome indicado pelo por name e á usado quando se usa a opção “Salvar destino como” no link que gera o PDF.
    D: envia para o browser e força o download do arquivo com o nome indicado por name.
    F: salva em um arquivo local com o nome informado em name.
*/
?>
<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/model_version.proto

namespace GPBMetadata\Proto\Clarifai\Api;

class ModelVersion
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Proto\Clarifai\Api\Common::initOnce();
        \GPBMetadata\Proto\Clarifai\Api\Concept::initOnce();
        \GPBMetadata\Proto\Clarifai\Api\Status\Status::initOnce();
        \GPBMetadata\Proto\Clarifai\Api\Utils\Extensions::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a881b0a2670726f746f2f636c6172696661692f6170692f6d6f64656c5f" .
            "76657273696f6e2e70726f746f120c636c6172696661692e6170691a2070" .
            "726f746f2f636c6172696661692f6170692f636f6e636570742e70726f74" .
            "6f1a2670726f746f2f636c6172696661692f6170692f7374617475732f73" .
            "74617475732e70726f746f1a2970726f746f2f636c6172696661692f6170" .
            "692f7574696c732f657874656e73696f6e732e70726f746f1a1f676f6f67" .
            "6c652f70726f746f6275662f74696d657374616d702e70726f746f22a202" .
            "0a0c4d6f64656c56657273696f6e120a0a026964180120012809122e0a0a" .
            "637265617465645f617418022001280b321a2e676f6f676c652e70726f74" .
            "6f6275662e54696d657374616d70122b0a0673746174757318032001280b" .
            "321b2e636c6172696661692e6170692e7374617475732e53746174757312" .
            "1c0a146163746976655f636f6e636570745f636f756e7418042001280d12" .
            "2a0a076d65747269637318052001280b32192e636c6172696661692e6170" .
            "692e4576616c4d65747269637312190a11746f74616c5f696e7075745f63" .
            "6f756e7418062001280d12440a17707265747261696e65645f6d6f64656c" .
            "5f636f6e66696718072001280b32232e636c6172696661692e6170692e50" .
            "7265747261696e65644d6f64656c436f6e66696722310a15507265747261" .
            "696e65644d6f64656c436f6e666967120a0a026964180120012809120c0a" .
            "0474797065180220012809226f0a164765744d6f64656c56657273696f6e" .
            "52657175657374122f0a0b757365725f6170705f696418012001280b321a" .
            "2e636c6172696661692e6170692e55736572417070494453657412100a08" .
            "6d6f64656c5f696418022001280912120a0a76657273696f6e5f69641803" .
            "200128092292010a184c6973744d6f64656c56657273696f6e7352657175" .
            "657374122f0a0b757365725f6170705f696418012001280b321a2e636c61" .
            "72696661692e6170692e55736572417070494453657412100a086d6f6465" .
            "6c5f6964180220012809120c0a047061676518032001280d12100a087065" .
            "725f7061676518042001280d12130a0b636f6e636570745f696473180520" .
            "0328092291010a18506f73744d6f64656c56657273696f6e735265717565" .
            "7374122f0a0b757365725f6170705f696418012001280b321a2e636c6172" .
            "696661692e6170692e55736572417070494453657412100a086d6f64656c" .
            "5f696418022001280912320a0e6d6f64656c5f76657273696f6e73180320" .
            "03280b321a2e636c6172696661692e6170692e4d6f64656c56657273696f" .
            "6e22720a1944656c6574654d6f64656c56657273696f6e52657175657374" .
            "122f0a0b757365725f6170705f696418012001280b321a2e636c61726966" .
            "61692e6170692e55736572417070494453657412100a086d6f64656c5f69" .
            "6418032001280912120a0a76657273696f6e5f6964180420012809227c0a" .
            "1a53696e676c654d6f64656c56657273696f6e526573706f6e7365122b0a" .
            "0673746174757318012001280b321b2e636c6172696661692e6170692e73" .
            "74617475732e53746174757312310a0d6d6f64656c5f76657273696f6e18" .
            "022001280b321a2e636c6172696661692e6170692e4d6f64656c56657273" .
            "696f6e2282010a194d756c74694d6f64656c56657273696f6e526573706f" .
            "6e7365122b0a0673746174757318012001280b321b2e636c617269666169" .
            "2e6170692e7374617475732e53746174757312380a0e6d6f64656c5f7665" .
            "7273696f6e7318022003280b321a2e636c6172696661692e6170692e4d6f" .
            "64656c56657273696f6e420480b5180122310a0a4c6162656c436f756e74" .
            "12140a0c636f6e636570745f6e616d65180120012809120d0a05636f756e" .
            "7418022001280d224c0a114c6162656c446973747269627574696f6e1237" .
            "0a15706f7369746976655f6c6162656c5f636f756e747318012003280b32" .
            "182e636c6172696661692e6170692e4c6162656c436f756e7422420a1743" .
            "6f6f6363757272656e63654d6174726978456e747279120b0a03726f7718" .
            "0120012809120b0a03636f6c180220012809120d0a05636f756e74180320" .
            "01280d22600a12436f6f6363757272656e63654d617472697812350a066d" .
            "617472697818012003280b32252e636c6172696661692e6170692e436f6f" .
            "6363757272656e63654d6174726978456e74727912130a0b636f6e636570" .
            "745f69647318022003280922480a14436f6e667573696f6e4d6174726978" .
            "456e74727912110a09707265646963746564180120012809120e0a066163" .
            "7475616c180220012809120d0a0576616c7565180420012802225a0a0f43" .
            "6f6e667573696f6e4d617472697812320a066d617472697818012003280b" .
            "32222e636c6172696661692e6170692e436f6e667573696f6e4d61747269" .
            "78456e74727912130a0b636f6e636570745f69647318022003280922330a" .
            "03524f43120b0a03667072180120032802120b0a03747072180220032802" .
            "12120a0a7468726573686f6c6473180320032802224d0a14507265636973" .
            "696f6e526563616c6c4375727665120e0a06726563616c6c180120032802" .
            "12110a09707265636973696f6e18022003280212120a0a7468726573686f" .
            "6c647318032003280222f1010a0d42696e6172794d657472696373120f0a" .
            "076e756d5f706f7318012001280d120f0a076e756d5f6e65671802200128" .
            "0d120f0a076e756d5f746f7418032001280d120f0a07726f635f61756318" .
            "0420012802120a0a02663118052001280212260a07636f6e636570741806" .
            "2001280b32152e636c6172696661692e6170692e436f6e6365707412240a" .
            "09726f635f637572766518072001280b32112e636c6172696661692e6170" .
            "692e524f4312420a16707265636973696f6e5f726563616c6c5f63757276" .
            "6518082001280b32222e636c6172696661692e6170692e50726563697369" .
            "6f6e526563616c6c43757276652294010a104576616c5465737453657445" .
            "6e747279120a0a026964180120012809120b0a0375726c18022001280912" .
            "310a127072656469637465645f636f6e636570747318032003280b32152e" .
            "636c6172696661692e6170692e436f6e6365707412340a1567726f756e64" .
            "5f74727574685f636f6e636570747318042003280b32152e636c61726966" .
            "61692e6170692e436f6e6365707422eb010a0e4d65747269637353756d6d" .
            "61727912190a0d746f70315f616363757261637918012001280242021801" .
            "12190a0d746f70355f61636375726163791802200128024202180112190a" .
            "116d6163726f5f6176675f726f635f61756318032001280212190a116d61" .
            "63726f5f7374645f726f635f617563180420012802121a0a126d6163726f" .
            "5f6176675f66315f73636f7265180520012802121a0a126d6163726f5f73" .
            "74645f66315f73636f7265180620012802121b0a136d6163726f5f617667" .
            "5f707265636973696f6e18072001280212180a106d6163726f5f6176675f" .
            "726563616c6c18082001280222ff020a0b4576616c4d657472696373122b" .
            "0a0673746174757318012001280b321b2e636c6172696661692e6170692e" .
            "7374617475732e537461747573122d0a0773756d6d61727918022001280b" .
            "321c2e636c6172696661692e6170692e4d65747269637353756d6d617279" .
            "12370a10636f6e667573696f6e5f6d617472697818032001280b321d2e63" .
            "6c6172696661692e6170692e436f6e667573696f6e4d6174726978123d0a" .
            "13636f6f6363757272656e63655f6d617472697818042001280b32202e63" .
            "6c6172696661692e6170692e436f6f6363757272656e63654d6174726978" .
            "12350a0c6c6162656c5f636f756e747318052001280b321f2e636c617269" .
            "6661692e6170692e4c6162656c446973747269627574696f6e12330a0e62" .
            "696e6172795f6d65747269637318062003280b321b2e636c617269666169" .
            "2e6170692e42696e6172794d65747269637312300a08746573745f736574" .
            "18072003280b321e2e636c6172696661692e6170692e4576616c54657374" .
            "536574456e74727922c6020a1d4765744d6f64656c56657273696f6e4d65" .
            "747269637352657175657374122f0a0b757365725f6170705f6964180120" .
            "01280b321a2e636c6172696661692e6170692e5573657241707049445365" .
            "7412100a086d6f64656c5f696418022001280912120a0a76657273696f6e" .
            "5f696418032001280912470a066669656c647318042001280b32372e636c" .
            "6172696661692e6170692e4765744d6f64656c56657273696f6e4d657472" .
            "696373526571756573742e4669656c647356616c75651a84010a0b466965" .
            "6c647356616c756512180a10636f6e667573696f6e5f6d61747269781801" .
            "20012808121b0a13636f6f6363757272656e63655f6d6174726978180220" .
            "01280812140a0c6c6162656c5f636f756e747318032001280812160a0e62" .
            "696e6172795f6d65747269637318042001280812100a08746573745f7365" .
            "74180520012808228d010a1e506f73744d6f64656c56657273696f6e4d65" .
            "747269637352657175657374122f0a0b757365725f6170705f6964180120" .
            "01280b321a2e636c6172696661692e6170692e5573657241707049445365" .
            "7412100a086d6f64656c5f696418022001280912120a0a76657273696f6e" .
            "5f696418032001280912140a0c6d61785f6578616d706c65731804200128" .
            "0d42245a03617069a2020443414950c202015fca0211436c617269666169" .
            "5c496e7465726e616c620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}


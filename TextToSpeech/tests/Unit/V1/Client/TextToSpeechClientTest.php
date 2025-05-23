<?php
/*
 * Copyright 2025 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

namespace Google\Cloud\TextToSpeech\Tests\Unit\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\BidiStream;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\Testing\GeneratedTest;
use Google\ApiCore\Testing\MockTransport;
use Google\Cloud\TextToSpeech\V1\AudioConfig;
use Google\Cloud\TextToSpeech\V1\AudioEncoding;
use Google\Cloud\TextToSpeech\V1\Client\TextToSpeechClient;
use Google\Cloud\TextToSpeech\V1\ListVoicesRequest;
use Google\Cloud\TextToSpeech\V1\ListVoicesResponse;
use Google\Cloud\TextToSpeech\V1\StreamingSynthesizeRequest;
use Google\Cloud\TextToSpeech\V1\StreamingSynthesizeResponse;
use Google\Cloud\TextToSpeech\V1\SynthesisInput;
use Google\Cloud\TextToSpeech\V1\SynthesizeSpeechRequest;
use Google\Cloud\TextToSpeech\V1\SynthesizeSpeechResponse;
use Google\Cloud\TextToSpeech\V1\VoiceSelectionParams;
use Google\Rpc\Code;
use stdClass;

/**
 * @group texttospeech
 *
 * @group gapic
 */
class TextToSpeechClientTest extends GeneratedTest
{
    /** @return TransportInterface */
    private function createTransport($deserialize = null)
    {
        return new MockTransport($deserialize);
    }

    /** @return CredentialsWrapper */
    private function createCredentials()
    {
        return $this->getMockBuilder(CredentialsWrapper::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    /** @return TextToSpeechClient */
    private function createClient(array $options = [])
    {
        $options += [
            'credentials' => $this->createCredentials(),
        ];
        return new TextToSpeechClient($options);
    }

    /** @test */
    public function listVoicesTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new ListVoicesResponse();
        $transport->addResponse($expectedResponse);
        $request = new ListVoicesRequest();
        $response = $gapicClient->listVoices($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.texttospeech.v1.TextToSpeech/ListVoices', $actualFuncCall);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listVoicesExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage = json_encode(
            [
                'message' => 'internal error',
                'code' => Code::DATA_LOSS,
                'status' => 'DATA_LOSS',
                'details' => [],
            ],
            JSON_PRETTY_PRINT
        );
        $transport->addResponse(null, $status);
        $request = new ListVoicesRequest();
        try {
            $gapicClient->listVoices($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function streamingSynthesizeTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $audioContent = '16';
        $expectedResponse = new StreamingSynthesizeResponse();
        $expectedResponse->setAudioContent($audioContent);
        $transport->addResponse($expectedResponse);
        $audioContent2 = '-61';
        $expectedResponse2 = new StreamingSynthesizeResponse();
        $expectedResponse2->setAudioContent($audioContent2);
        $transport->addResponse($expectedResponse2);
        $audioContent3 = '-60';
        $expectedResponse3 = new StreamingSynthesizeResponse();
        $expectedResponse3->setAudioContent($audioContent3);
        $transport->addResponse($expectedResponse3);
        // Mock request
        $request = new StreamingSynthesizeRequest();
        $request2 = new StreamingSynthesizeRequest();
        $request3 = new StreamingSynthesizeRequest();
        $bidi = $gapicClient->streamingSynthesize();
        $this->assertInstanceOf(BidiStream::class, $bidi);
        $bidi->write($request);
        $responses = [];
        $responses[] = $bidi->read();
        $bidi->writeAll([$request2, $request3]);
        foreach ($bidi->closeWriteAndReadAll() as $response) {
            $responses[] = $response;
        }

        $expectedResponses = [];
        $expectedResponses[] = $expectedResponse;
        $expectedResponses[] = $expectedResponse2;
        $expectedResponses[] = $expectedResponse3;
        $this->assertEquals($expectedResponses, $responses);
        $createStreamRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($createStreamRequests));
        $streamFuncCall = $createStreamRequests[0]->getFuncCall();
        $streamRequestObject = $createStreamRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.texttospeech.v1.TextToSpeech/StreamingSynthesize', $streamFuncCall);
        $this->assertNull($streamRequestObject);
        $callObjects = $transport->popCallObjects();
        $this->assertSame(1, count($callObjects));
        $bidiCall = $callObjects[0];
        $writeRequests = $bidiCall->popReceivedCalls();
        $expectedRequests = [];
        $expectedRequests[] = $request;
        $expectedRequests[] = $request2;
        $expectedRequests[] = $request3;
        $this->assertEquals($expectedRequests, $writeRequests);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function streamingSynthesizeExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage = json_encode(
            [
                'message' => 'internal error',
                'code' => Code::DATA_LOSS,
                'status' => 'DATA_LOSS',
                'details' => [],
            ],
            JSON_PRETTY_PRINT
        );
        $transport->setStreamingStatus($status);
        $this->assertTrue($transport->isExhausted());
        $bidi = $gapicClient->streamingSynthesize();
        $results = $bidi->closeWriteAndReadAll();
        try {
            iterator_to_array($results);
            // If the close stream method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function synthesizeSpeechTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $audioContent = '16';
        $expectedResponse = new SynthesizeSpeechResponse();
        $expectedResponse->setAudioContent($audioContent);
        $transport->addResponse($expectedResponse);
        // Mock request
        $input = new SynthesisInput();
        $voice = new VoiceSelectionParams();
        $voiceLanguageCode = 'voiceLanguageCode-686472265';
        $voice->setLanguageCode($voiceLanguageCode);
        $audioConfig = new AudioConfig();
        $audioConfigAudioEncoding = AudioEncoding::AUDIO_ENCODING_UNSPECIFIED;
        $audioConfig->setAudioEncoding($audioConfigAudioEncoding);
        $request = (new SynthesizeSpeechRequest())
            ->setInput($input)
            ->setVoice($voice)
            ->setAudioConfig($audioConfig);
        $response = $gapicClient->synthesizeSpeech($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.texttospeech.v1.TextToSpeech/SynthesizeSpeech', $actualFuncCall);
        $actualValue = $actualRequestObject->getInput();
        $this->assertProtobufEquals($input, $actualValue);
        $actualValue = $actualRequestObject->getVoice();
        $this->assertProtobufEquals($voice, $actualValue);
        $actualValue = $actualRequestObject->getAudioConfig();
        $this->assertProtobufEquals($audioConfig, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function synthesizeSpeechExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage = json_encode(
            [
                'message' => 'internal error',
                'code' => Code::DATA_LOSS,
                'status' => 'DATA_LOSS',
                'details' => [],
            ],
            JSON_PRETTY_PRINT
        );
        $transport->addResponse(null, $status);
        // Mock request
        $input = new SynthesisInput();
        $voice = new VoiceSelectionParams();
        $voiceLanguageCode = 'voiceLanguageCode-686472265';
        $voice->setLanguageCode($voiceLanguageCode);
        $audioConfig = new AudioConfig();
        $audioConfigAudioEncoding = AudioEncoding::AUDIO_ENCODING_UNSPECIFIED;
        $audioConfig->setAudioEncoding($audioConfigAudioEncoding);
        $request = (new SynthesizeSpeechRequest())
            ->setInput($input)
            ->setVoice($voice)
            ->setAudioConfig($audioConfig);
        try {
            $gapicClient->synthesizeSpeech($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listVoicesAsyncTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new ListVoicesResponse();
        $transport->addResponse($expectedResponse);
        $request = new ListVoicesRequest();
        $response = $gapicClient->listVoicesAsync($request)->wait();
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.texttospeech.v1.TextToSpeech/ListVoices', $actualFuncCall);
        $this->assertTrue($transport->isExhausted());
    }
}

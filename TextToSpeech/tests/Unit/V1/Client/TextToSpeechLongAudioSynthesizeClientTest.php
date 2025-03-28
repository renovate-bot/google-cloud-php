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
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\Testing\GeneratedTest;
use Google\ApiCore\Testing\MockTransport;
use Google\Cloud\TextToSpeech\V1\AudioConfig;
use Google\Cloud\TextToSpeech\V1\AudioEncoding;
use Google\Cloud\TextToSpeech\V1\Client\TextToSpeechLongAudioSynthesizeClient;
use Google\Cloud\TextToSpeech\V1\SynthesisInput;
use Google\Cloud\TextToSpeech\V1\SynthesizeLongAudioRequest;
use Google\Cloud\TextToSpeech\V1\SynthesizeLongAudioResponse;
use Google\LongRunning\Client\OperationsClient;
use Google\LongRunning\GetOperationRequest;
use Google\LongRunning\Operation;
use Google\Protobuf\Any;
use Google\Rpc\Code;
use stdClass;

/**
 * @group texttospeech
 *
 * @group gapic
 */
class TextToSpeechLongAudioSynthesizeClientTest extends GeneratedTest
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

    /** @return TextToSpeechLongAudioSynthesizeClient */
    private function createClient(array $options = [])
    {
        $options += [
            'credentials' => $this->createCredentials(),
        ];
        return new TextToSpeechLongAudioSynthesizeClient($options);
    }

    /** @test */
    public function synthesizeLongAudioTest()
    {
        $operationsTransport = $this->createTransport();
        $operationsClient = new OperationsClient([
            'apiEndpoint' => '',
            'transport' => $operationsTransport,
            'credentials' => $this->createCredentials(),
        ]);
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
            'operationsClient' => $operationsClient,
        ]);
        $this->assertTrue($transport->isExhausted());
        $this->assertTrue($operationsTransport->isExhausted());
        // Mock response
        $incompleteOperation = new Operation();
        $incompleteOperation->setName('operations/synthesizeLongAudioTest');
        $incompleteOperation->setDone(false);
        $transport->addResponse($incompleteOperation);
        $expectedResponse = new SynthesizeLongAudioResponse();
        $anyResponse = new Any();
        $anyResponse->setValue($expectedResponse->serializeToString());
        $completeOperation = new Operation();
        $completeOperation->setName('operations/synthesizeLongAudioTest');
        $completeOperation->setDone(true);
        $completeOperation->setResponse($anyResponse);
        $operationsTransport->addResponse($completeOperation);
        // Mock request
        $input = new SynthesisInput();
        $audioConfig = new AudioConfig();
        $audioConfigAudioEncoding = AudioEncoding::AUDIO_ENCODING_UNSPECIFIED;
        $audioConfig->setAudioEncoding($audioConfigAudioEncoding);
        $request = (new SynthesizeLongAudioRequest())->setInput($input)->setAudioConfig($audioConfig);
        $response = $gapicClient->synthesizeLongAudio($request);
        $this->assertFalse($response->isDone());
        $this->assertNull($response->getResult());
        $apiRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($apiRequests));
        $operationsRequestsEmpty = $operationsTransport->popReceivedCalls();
        $this->assertSame(0, count($operationsRequestsEmpty));
        $actualApiFuncCall = $apiRequests[0]->getFuncCall();
        $actualApiRequestObject = $apiRequests[0]->getRequestObject();
        $this->assertSame(
            '/google.cloud.texttospeech.v1.TextToSpeechLongAudioSynthesize/SynthesizeLongAudio',
            $actualApiFuncCall
        );
        $actualValue = $actualApiRequestObject->getInput();
        $this->assertProtobufEquals($input, $actualValue);
        $actualValue = $actualApiRequestObject->getAudioConfig();
        $this->assertProtobufEquals($audioConfig, $actualValue);
        $expectedOperationsRequestObject = new GetOperationRequest();
        $expectedOperationsRequestObject->setName('operations/synthesizeLongAudioTest');
        $response->pollUntilComplete([
            'initialPollDelayMillis' => 1,
        ]);
        $this->assertTrue($response->isDone());
        $this->assertEquals($expectedResponse, $response->getResult());
        $apiRequestsEmpty = $transport->popReceivedCalls();
        $this->assertSame(0, count($apiRequestsEmpty));
        $operationsRequests = $operationsTransport->popReceivedCalls();
        $this->assertSame(1, count($operationsRequests));
        $actualOperationsFuncCall = $operationsRequests[0]->getFuncCall();
        $actualOperationsRequestObject = $operationsRequests[0]->getRequestObject();
        $this->assertSame('/google.longrunning.Operations/GetOperation', $actualOperationsFuncCall);
        $this->assertEquals($expectedOperationsRequestObject, $actualOperationsRequestObject);
        $this->assertTrue($transport->isExhausted());
        $this->assertTrue($operationsTransport->isExhausted());
    }

    /** @test */
    public function synthesizeLongAudioExceptionTest()
    {
        $operationsTransport = $this->createTransport();
        $operationsClient = new OperationsClient([
            'apiEndpoint' => '',
            'transport' => $operationsTransport,
            'credentials' => $this->createCredentials(),
        ]);
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
            'operationsClient' => $operationsClient,
        ]);
        $this->assertTrue($transport->isExhausted());
        $this->assertTrue($operationsTransport->isExhausted());
        // Mock response
        $incompleteOperation = new Operation();
        $incompleteOperation->setName('operations/synthesizeLongAudioTest');
        $incompleteOperation->setDone(false);
        $transport->addResponse($incompleteOperation);
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
        $operationsTransport->addResponse(null, $status);
        // Mock request
        $input = new SynthesisInput();
        $audioConfig = new AudioConfig();
        $audioConfigAudioEncoding = AudioEncoding::AUDIO_ENCODING_UNSPECIFIED;
        $audioConfig->setAudioEncoding($audioConfigAudioEncoding);
        $request = (new SynthesizeLongAudioRequest())->setInput($input)->setAudioConfig($audioConfig);
        $response = $gapicClient->synthesizeLongAudio($request);
        $this->assertFalse($response->isDone());
        $this->assertNull($response->getResult());
        $expectedOperationsRequestObject = new GetOperationRequest();
        $expectedOperationsRequestObject->setName('operations/synthesizeLongAudioTest');
        try {
            $response->pollUntilComplete([
                'initialPollDelayMillis' => 1,
            ]);
            // If the pollUntilComplete() method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stubs are exhausted
        $transport->popReceivedCalls();
        $operationsTransport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
        $this->assertTrue($operationsTransport->isExhausted());
    }

    /** @test */
    public function synthesizeLongAudioAsyncTest()
    {
        $operationsTransport = $this->createTransport();
        $operationsClient = new OperationsClient([
            'apiEndpoint' => '',
            'transport' => $operationsTransport,
            'credentials' => $this->createCredentials(),
        ]);
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
            'operationsClient' => $operationsClient,
        ]);
        $this->assertTrue($transport->isExhausted());
        $this->assertTrue($operationsTransport->isExhausted());
        // Mock response
        $incompleteOperation = new Operation();
        $incompleteOperation->setName('operations/synthesizeLongAudioTest');
        $incompleteOperation->setDone(false);
        $transport->addResponse($incompleteOperation);
        $expectedResponse = new SynthesizeLongAudioResponse();
        $anyResponse = new Any();
        $anyResponse->setValue($expectedResponse->serializeToString());
        $completeOperation = new Operation();
        $completeOperation->setName('operations/synthesizeLongAudioTest');
        $completeOperation->setDone(true);
        $completeOperation->setResponse($anyResponse);
        $operationsTransport->addResponse($completeOperation);
        // Mock request
        $input = new SynthesisInput();
        $audioConfig = new AudioConfig();
        $audioConfigAudioEncoding = AudioEncoding::AUDIO_ENCODING_UNSPECIFIED;
        $audioConfig->setAudioEncoding($audioConfigAudioEncoding);
        $request = (new SynthesizeLongAudioRequest())->setInput($input)->setAudioConfig($audioConfig);
        $response = $gapicClient->synthesizeLongAudioAsync($request)->wait();
        $this->assertFalse($response->isDone());
        $this->assertNull($response->getResult());
        $apiRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($apiRequests));
        $operationsRequestsEmpty = $operationsTransport->popReceivedCalls();
        $this->assertSame(0, count($operationsRequestsEmpty));
        $actualApiFuncCall = $apiRequests[0]->getFuncCall();
        $actualApiRequestObject = $apiRequests[0]->getRequestObject();
        $this->assertSame(
            '/google.cloud.texttospeech.v1.TextToSpeechLongAudioSynthesize/SynthesizeLongAudio',
            $actualApiFuncCall
        );
        $actualValue = $actualApiRequestObject->getInput();
        $this->assertProtobufEquals($input, $actualValue);
        $actualValue = $actualApiRequestObject->getAudioConfig();
        $this->assertProtobufEquals($audioConfig, $actualValue);
        $expectedOperationsRequestObject = new GetOperationRequest();
        $expectedOperationsRequestObject->setName('operations/synthesizeLongAudioTest');
        $response->pollUntilComplete([
            'initialPollDelayMillis' => 1,
        ]);
        $this->assertTrue($response->isDone());
        $this->assertEquals($expectedResponse, $response->getResult());
        $apiRequestsEmpty = $transport->popReceivedCalls();
        $this->assertSame(0, count($apiRequestsEmpty));
        $operationsRequests = $operationsTransport->popReceivedCalls();
        $this->assertSame(1, count($operationsRequests));
        $actualOperationsFuncCall = $operationsRequests[0]->getFuncCall();
        $actualOperationsRequestObject = $operationsRequests[0]->getRequestObject();
        $this->assertSame('/google.longrunning.Operations/GetOperation', $actualOperationsFuncCall);
        $this->assertEquals($expectedOperationsRequestObject, $actualOperationsRequestObject);
        $this->assertTrue($transport->isExhausted());
        $this->assertTrue($operationsTransport->isExhausted());
    }
}

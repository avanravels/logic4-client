<?php

declare(strict_types=1);

namespace Webparking\Logic4Client\Requests;

use Webparking\Logic4Client\Exceptions\Logic4ApiException;
use Webparking\Logic4Client\Request;
use Webparking\Logic4Client\Responses\BooleanLogic4Response;
use Webparking\Logic4Client\Responses\EmailAddressLogic4Response;
use Webparking\Logic4Client\Responses\EmailAttachmentLogic4Response;
use Webparking\Logic4Client\Responses\EmailAttachmentLogic4ResponseList;
use Webparking\Logic4Client\Responses\EmailBoxLogic4Response;
use Webparking\Logic4Client\Responses\EmailMessageLogic4Response;
use Webparking\Logic4Client\Responses\EmailMessageStatusLogic4Response;
use Webparking\Logic4Client\Responses\EmailUserLogic4Response;
use Webparking\Logic4Client\Responses\Int32Logic4Response;

class Email extends Request
{
    /**
     * @param array{
     *     Id?: integer,
     *     EmailMessageId?: integer,
     *     Name?: string,
     *     ContentId?: string,
     *     IsEmbeddedContent?: boolean,
     * } $parameters
     *
     * @throws Logic4ApiException
     */
    public function addEmailAttachment(array $parameters = []): Int32Logic4Response
    {
        return Int32Logic4Response::make(
            $this->buildResponse(
                $this->getClient()->post('/v1/Email/AddEmailAttachment', ['json' => $parameters]),
            )
        );
    }

    /**
     * @throws Logic4ApiException
     */
    public function addEmailAttachments(): EmailAttachmentLogic4ResponseList
    {
        return EmailAttachmentLogic4ResponseList::make(
            $this->buildResponse(
                $this->getClient()->post('/v1/Email/AddEmailAttachments'),
            )
        );
    }

    /**
     * Maak een nieuwe emailbox aan, bij een onderliggende emailbox worden de rechten overgenomen van de bovenliggende emailbox.
     * Als het om een submap van de inbox gaat worden deze rechten overgenomen.
     *
     * @param array{
     *     Id?: integer,
     *     Name?: string,
     *     ParentId?: integer,
     *     UserCanRead?: boolean,
     *     UserCanDelete?: boolean,
     *     SortId?: integer,
     *     NewMessages?: integer,
     *     HasEmails?: boolean,
     * } $parameters
     *
     * @throws Logic4ApiException
     */
    public function addEmailBox(array $parameters = []): BooleanLogic4Response
    {
        return BooleanLogic4Response::make(
            $this->buildResponse(
                $this->getClient()->post('/v1/Email/AddEmailBox', ['json' => $parameters]),
            )
        );
    }

    /**
     * @param array{
     *     Id?: integer,
     *     Subject?: string,
     *     EmailBody?: string,
     *     IsHTMLBody?: boolean,
     *     BoxId?: integer,
     *     DateTimeSend?: string,
     *     IsInbound?: boolean,
     *     IsRead?: boolean,
     *     IsReplyedOn?: string,
     *     IsForwardedOn?: string,
     *     ToEmailAddresses?: array<mixed>,
     *     CCEmailAddresses?: array<mixed>,
     *     BCCEmailAddresses?: array<mixed>,
     *     HasAttachment?: boolean,
     *     PreviousEmailId?: integer,
     *     CanDelete?: boolean,
     * } $parameters
     *
     * @throws Logic4ApiException
     */
    public function addEmailMessage(array $parameters = []): Int32Logic4Response
    {
        return Int32Logic4Response::make(
            $this->buildResponse(
                $this->getClient()->post('/v1/Email/AddEmailMessage', ['json' => $parameters]),
            )
        );
    }

    /**
     * @throws Logic4ApiException
     */
    public function deleteEmailAttachment(): BooleanLogic4Response
    {
        return BooleanLogic4Response::make(
            $this->buildResponse(
                $this->getClient()->post('/v1/Email/DeleteEmailAttachment'),
            )
        );
    }

    /**
     * Verwijder een emailbox, let op dit kan alleen als er geen emails of onderliggende emailboxen aan gekoppeld zijn.
     *
     * @throws Logic4ApiException
     */
    public function deleteEmailBox(): BooleanLogic4Response
    {
        return BooleanLogic4Response::make(
            $this->buildResponse(
                $this->getClient()->post('/v1/Email/DeleteEmailBox'),
            )
        );
    }

    /**
     * @throws Logic4ApiException
     */
    public function deleteEmailMessage(): BooleanLogic4Response
    {
        return BooleanLogic4Response::make(
            $this->buildResponse(
                $this->getClient()->post('/v1/Email/DeleteEmailMessage'),
            )
        );
    }

    /**
     * @param array{
     *     EmailIds?: array<integer>,
     *     EmailBoxId?: integer,
     *     EmailStatusId?: integer,
     *     IsRead?: boolean,
     *     Action?: string,
     * } $parameters
     *
     * @throws Logic4ApiException
     */
    public function emailMessagesAction(array $parameters = []): BooleanLogic4Response
    {
        return BooleanLogic4Response::make(
            $this->buildResponse(
                $this->getClient()->post('/v1/Email/EmailMessagesAction', ['json' => $parameters]),
            )
        );
    }

    /**
     * @param array{
     *     EmailMessageId?: integer,
     * } $parameters
     *
     * @throws Logic4ApiException
     */
    public function getEmailAttachments(
        array $parameters = [],
    ): EmailAttachmentLogic4Response {
        return EmailAttachmentLogic4Response::make(
            $this->buildResponse(
                $this->getClient()->post('/v1/Email/GetEmailAttachments', ['json' => $parameters]),
            )
        );
    }

    /**
     * @param array{
     *     ParentId?: integer,
     *     ShowOnlyTopLevelEmailboxes?: boolean,
     * } $parameters
     *
     * @throws Logic4ApiException
     */
    public function getEmailBoxes(array $parameters = []): EmailBoxLogic4Response
    {
        return EmailBoxLogic4Response::make(
            $this->buildResponse(
                $this->getClient()->post('/v1/Email/GetEmailBoxes', ['json' => $parameters]),
            )
        );
    }

    /**
     * @param array{
     *     EmailId?: integer,
     *     EmailboxId?: integer,
     *     IncludedSubEmailboxes?: boolean,
     *     StartDate?: string,
     *     EndDate?: string,
     *     OnlyWithAttachment?: boolean,
     *     StatusId?: integer,
     *     IsInbound?: boolean,
     *     SearchText1?: string,
     *     SearchText1Type?: string,
     *     SearchText2?: string,
     *     SearchText2Type?: string,
     *     SearchText2Switch?: string,
     *     SearchText3?: string,
     *     SearchText3Type?: string,
     *     SearchText3Switch?: string,
     *     GetEmailMessageBody?: boolean,
     *     SkipRecords?: integer,
     *     TakeRecords?: integer,
     *     OrderByNewestFirst?: boolean,
     *     LoadRights?: boolean,
     * } $parameters
     *
     * @throws Logic4ApiException
     */
    public function getEmailMessages(
        array $parameters = [],
    ): EmailMessageLogic4Response {
        return EmailMessageLogic4Response::make(
            $this->buildResponse(
                $this->getClient()->post('/v1/Email/GetEmailMessages', ['json' => $parameters]),
            )
        );
    }

    /**
     * @throws Logic4ApiException
     */
    public function getEmailMessageStatuses(): EmailMessageStatusLogic4Response
    {
        return EmailMessageStatusLogic4Response::make(
            $this->buildResponse(
                $this->getClient()->get('/v1/Email/GetEmailMessageStatuses'),
            )
        );
    }

    /**
     * @throws Logic4ApiException
     */
    public function getEmailUser(): EmailUserLogic4Response
    {
        return EmailUserLogic4Response::make(
            $this->buildResponse(
                $this->getClient()->get('/v1/Email/GetEmailUser'),
            )
        );
    }

    /**
     * @throws Logic4ApiException
     */
    public function getUsedEmailAddresses(): EmailAddressLogic4Response
    {
        return EmailAddressLogic4Response::make(
            $this->buildResponse(
                $this->getClient()->get('/v1/Email/GetUsedEmailAddresses'),
            )
        );
    }

    /**
     * Update een emailbox o.b.v. meegestuurde user Id.
     *
     * @param array{
     *     Id?: integer,
     *     Name?: string,
     *     ParentId?: integer,
     *     UserCanRead?: boolean,
     *     UserCanDelete?: boolean,
     *     SortId?: integer,
     *     NewMessages?: integer,
     *     HasEmails?: boolean,
     * } $parameters
     *
     * @throws Logic4ApiException
     */
    public function updateEmailBox(array $parameters = []): BooleanLogic4Response
    {
        return BooleanLogic4Response::make(
            $this->buildResponse(
                $this->getClient()->post('/v1/Email/UpdateEmailBox', ['json' => $parameters]),
            )
        );
    }

    /**
     * @param array{
     *     Id?: integer,
     *     Subject?: string,
     *     EmailBody?: string,
     *     IsHTMLBody?: boolean,
     *     BoxId?: integer,
     *     DateTimeSend?: string,
     *     IsInbound?: boolean,
     *     IsRead?: boolean,
     *     IsReplyedOn?: string,
     *     IsForwardedOn?: string,
     *     ToEmailAddresses?: array<mixed>,
     *     CCEmailAddresses?: array<mixed>,
     *     BCCEmailAddresses?: array<mixed>,
     *     HasAttachment?: boolean,
     *     PreviousEmailId?: integer,
     *     CanDelete?: boolean,
     * } $parameters
     *
     * @throws Logic4ApiException
     */
    public function updateEmailMessage(array $parameters = []): Int32Logic4Response
    {
        return Int32Logic4Response::make(
            $this->buildResponse(
                $this->getClient()->put('/v1/Email/UpdateEmailMessage', ['json' => $parameters]),
            )
        );
    }
}

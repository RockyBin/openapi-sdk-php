<?php

namespace AlibabaCloud\DomainIntl\V20171218;

use AlibabaCloud\ApiResolverTrait;

/**
 * @deprecated
 *
 * @method static AcknowledgeTaskResult acknowledgeTaskResult(array $options = [])
 * @method static BatchFuzzyMatchDomainSensitiveWord batchFuzzyMatchDomainSensitiveWord(array $options = [])
 * @method static CheckDomain checkDomain(array $options = [])
 * @method static CheckDomainSunriseClaim checkDomainSunriseClaim(array $options = [])
 * @method static CheckTransferInFeasibility checkTransferInFeasibility(array $options = [])
 * @method static ConfirmTransferInEmail confirmTransferInEmail(array $options = [])
 * @method static DeleteEmailVerification deleteEmailVerification(array $options = [])
 * @method static DeleteRegistrantProfile deleteRegistrantProfile(array $options = [])
 * @method static DomainIntlApiResolver domainIntlApiResolver(array $options = [])
 * @method static EmailVerified emailVerified(array $options = [])
 * @method static FuzzyMatchDomainSensitiveWord fuzzyMatchDomainSensitiveWord(array $options = [])
 * @method static ListEmailVerification listEmailVerification(array $options = [])
 * @method static LookupTmchNotice lookupTmchNotice(array $options = [])
 * @method static PollTaskResult pollTaskResult(array $options = [])
 * @method static QueryChangeLogList queryChangeLogList(array $options = [])
 * @method static QueryContactInfo queryContactInfo(array $options = [])
 * @method static QueryDSRecord queryDSRecord(array $options = [])
 * @method static QueryDnsHost queryDnsHost(array $options = [])
 * @method static QueryDomainByInstanceId queryDomainByInstanceId(array $options = [])
 * @method static QueryDomainList queryDomainList(array $options = [])
 * @method static QueryEnsAssociation queryEnsAssociation(array $options = [])
 * @method static QueryLocalEnsAssociation queryLocalEnsAssociation(array $options = [])
 * @method static QueryRegistrantProfiles queryRegistrantProfiles(array $options = [])
 * @method static QueryTaskDetailHistory queryTaskDetailHistory(array $options = [])
 * @method static QueryTaskDetailList queryTaskDetailList(array $options = [])
 * @method static QueryTaskInfoHistory queryTaskInfoHistory(array $options = [])
 * @method static QueryTaskList queryTaskList(array $options = [])
 * @method static QueryTransferInByInstanceId queryTransferInByInstanceId(array $options = [])
 * @method static QueryTransferInList queryTransferInList(array $options = [])
 * @method static QueryTransferOutInfo queryTransferOutInfo(array $options = [])
 * @method static ResendEmailVerification resendEmailVerification(array $options = [])
 * @method static SaveBatchTaskForCreatingOrderActivate saveBatchTaskForCreatingOrderActivate(array $options = [])
 * @method static SaveBatchTaskForCreatingOrderRedeem saveBatchTaskForCreatingOrderRedeem(array $options = [])
 * @method static SaveBatchTaskForCreatingOrderRenew saveBatchTaskForCreatingOrderRenew(array $options = [])
 * @method static SaveBatchTaskForCreatingOrderTransfer saveBatchTaskForCreatingOrderTransfer(array $options = [])
 * @method static SaveBatchTaskForDomainNameProxyService saveBatchTaskForDomainNameProxyService(array $options = [])
 * @method static SaveBatchTaskForModifyingDomainDns saveBatchTaskForModifyingDomainDns(array $options = [])
 * @method static SaveBatchTaskForTransferProhibitionLock saveBatchTaskForTransferProhibitionLock(array $options = [])
 * @method static SaveBatchTaskForUpdateProhibitionLock saveBatchTaskForUpdateProhibitionLock(array $options = [])
 * @method static SaveBatchTaskForUpdatingContactInfo saveBatchTaskForUpdatingContactInfo(array $options = [])
 * @method static SaveBatchTaskForUpdatingContactInfoByNewContact saveBatchTaskForUpdatingContactInfoByNewContact($options = [])
 * @method static SaveRegistrantProfile saveRegistrantProfile(array $options = [])
 * @method static SaveSingleTaskForAddingDSRecord saveSingleTaskForAddingDSRecord(array $options = [])
 * @method static SaveSingleTaskForApprovingTransferOut saveSingleTaskForApprovingTransferOut(array $options = [])
 * @method static SaveSingleTaskForAssociatingEns saveSingleTaskForAssociatingEns(array $options = [])
 * @method static SaveSingleTaskForCancelingTransferIn saveSingleTaskForCancelingTransferIn(array $options = [])
 * @method static SaveSingleTaskForCancelingTransferOut saveSingleTaskForCancelingTransferOut(array $options = [])
 * @method static SaveSingleTaskForCreatingDnsHost saveSingleTaskForCreatingDnsHost(array $options = [])
 * @method static SaveSingleTaskForCreatingOrderActivate saveSingleTaskForCreatingOrderActivate(array $options = [])
 * @method static SaveSingleTaskForCreatingOrderRedeem saveSingleTaskForCreatingOrderRedeem(array $options = [])
 * @method static SaveSingleTaskForCreatingOrderRenew saveSingleTaskForCreatingOrderRenew(array $options = [])
 * @method static SaveSingleTaskForCreatingOrderTransfer saveSingleTaskForCreatingOrderTransfer(array $options = [])
 * @method static SaveSingleTaskForDeletingDSRecord saveSingleTaskForDeletingDSRecord(array $options = [])
 * @method static SaveSingleTaskForDeletingDnsHost saveSingleTaskForDeletingDnsHost(array $options = [])
 * @method static SaveSingleTaskForDisassociatingEns saveSingleTaskForDisassociatingEns(array $options = [])
 * @method static SaveSingleTaskForDomainNameProxyService saveSingleTaskForDomainNameProxyService(array $options = [])
 * @method static SaveSingleTaskForModifyingDSRecord saveSingleTaskForModifyingDSRecord(array $options = [])
 * @method static SaveSingleTaskForModifyingDnsHost saveSingleTaskForModifyingDnsHost(array $options = [])
 * @method static SaveSingleTaskForQueryingTransferAuthorizationCode saveSingleTaskForQueryingTransferAuthorizationCode(array $options = [])
 * @method static SaveSingleTaskForSynchronizingDSRecord saveSingleTaskForSynchronizingDSRecord(array $options = [])
 * @method static SaveSingleTaskForSynchronizingDnsHost saveSingleTaskForSynchronizingDnsHost(array $options = [])
 * @method static SaveSingleTaskForTransferProhibitionLock saveSingleTaskForTransferProhibitionLock(array $options = [])
 * @method static SaveSingleTaskForUpdateProhibitionLock saveSingleTaskForUpdateProhibitionLock(array $options = [])
 * @method static SaveSingleTaskForUpdatingContactInfo saveSingleTaskForUpdatingContactInfo(array $options = [])
 * @method static SaveTaskForSubmittingDomainDelete saveTaskForSubmittingDomainDelete(array $options = [])
 * @method static SubmitEmailVerification submitEmailVerification(array $options = [])
 * @method static TransferInCheckMailToken transferInCheckMailToken(array $options = [])
 * @method static TransferInReenterTransferAuthorizationCode transferInReenterTransferAuthorizationCode(array $options = [])
 * @method static TransferInRefetchWhoisEmail transferInRefetchWhoisEmail(array $options = [])
 * @method static TransferInResendMailToken transferInResendMailToken(array $options = [])
 * @method static VerifyContactField verifyContactField(array $options = [])
 * @method static VerifyEmail verifyEmail(array $options = [])
 */
class DomainIntl
{
    use ApiResolverTrait;
}

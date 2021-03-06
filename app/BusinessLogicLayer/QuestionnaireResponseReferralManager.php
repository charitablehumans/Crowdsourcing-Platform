<?php

namespace App\BusinessLogicLayer;


use App\Repository\QuestionnaireResponseReferralRepository;

class QuestionnaireResponseReferralManager {

    private $questionnaireResponseReferralRepository;

    public function __construct(QuestionnaireResponseReferralRepository $questionnaireResponseReferralRepository) {
        $this->questionnaireResponseReferralRepository = $questionnaireResponseReferralRepository;
    }

    public function getQuestionnaireReferralsForUser($userId) {
        return $this->questionnaireResponseReferralRepository->getQuestionnaireReferralsForUser($userId);
    }

    /**
     * @param $questionnaireId int the id of the questionnaire answered
     * @param $respondentId int the id of the user who responded
     * @param $referrerId int the id of the user who shared the questionnaire
     * @return mixed the object created
     */
    public function createQuestionnaireResponseReferral($questionnaireId, $respondentId, $referrerId) {
        return $this->questionnaireResponseReferralRepository->create([
            'questionnaire_id' => $questionnaireId,
            'respondent_id' => $respondentId,
            'referrer_id' => $referrerId
        ]);
    }

    public function getQuestionnaireReferralsForUserForQuestionnaire(int $questionnaireId, int $userId) {
        return $this->questionnaireResponseReferralRepository->getQuestionnaireReferralsForUserForQuestionnaire($questionnaireId, $userId);
    }
}
/**
 * @file
 * Copyright © 2016 Valiton GmbH.
 *
 * This file is part of Harbourmaster Drupal Plugin.
 *
 * Harbourmaster Drupal Plugin is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Harbourmaster Drupal Plugin is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Harbourmaster Drupal Plugin.  If not, see <http://www.gnu.org/licenses/>.
 */

jQuery(document).ready(function () {
  "use strict";

  // Include all Drupal Translation String in a Drupal.t() funktion call in this file.
  // This is need for make drupal load the translation into javascript.
  var translationsLoader = [
    Drupal.t('harbourmaster.widget.confirmation.title.confirmed'),
    Drupal.t('harbourmaster.widget.confirmation.title.invalidToken'),
    Drupal.t('harbourmaster.widget.resetPassword.title.invalidToken'),
    Drupal.t('harbourmaster.widget.resetPassword.title.questions'),
    Drupal.t('harbourmaster.widget.resetPassword.title.success'),
    Drupal.t('harbourmaster.widget.resetPassword.title.passwordreset'),
    Drupal.t('harbourmaster.widget.resetPassword.label.new_password'),
    Drupal.t('harbourmaster.widget.resetPassword.label.username'),
    Drupal.t('harbourmaster.widget.resetPassword.placeholder.new_password'),
    Drupal.t('harbourmaster.widget.resetPassword.placeholder.validation_password'),
    Drupal.t('harbourmaster.widget.resetPassword.placeholder.username'),
    Drupal.t('harbourmaster.widget.resetPassword.description.success_message'),
    Drupal.t('harbourmaster.widget.resetPassword.description.set_password'),
    Drupal.t('harbourmaster.widget.resetPassword.button.passwordreset'),
    Drupal.t('harbourmaster.widget.resetPassword.button.set_password'),
    Drupal.t('harbourmaster.widget.resetPassword.error.username.required'),
    Drupal.t('harbourmaster.widget.resetPassword.error.username.string'),
    Drupal.t('harbourmaster.widget.resetPassword.error.username.error'),
    Drupal.t('harbourmaster.widget.resetPassword.error.username.credentials'),
    Drupal.t('harbourmaster.widget.resetPassword.error.username.regex'),
    Drupal.t('harbourmaster.widget.resetPassword.error.username.AccountHasNoEmailAddress'),
    Drupal.t('harbourmaster.widget.resetPassword.error.username.NoSuchUser'),
    Drupal.t('harbourmaster.widget.resetPassword.error.username.ConfirmationEmailSent'),
    Drupal.t('harbourmaster.widget.resetPassword.flash.success'),
    Drupal.t('harbourmaster.widget.resetPassword.flash.error'),
    Drupal.t('harbourmaster.widget.resetPassword.flash.passwordreset.error'),
    Drupal.t('harbourmaster.widget.resetPassword.intro.text'),
    Drupal.t('harbourmaster.widget.profile.title.profile'),
    Drupal.t('harbourmaster.widget.profile.title.member'),
    Drupal.t('harbourmaster.widget.profile.title.password'),
    Drupal.t('harbourmaster.widget.profile.title.securityQuestions'),
    Drupal.t('harbourmaster.widget.profile.title.memberAdvertisement'),
    Drupal.t('harbourmaster.widget.profile.label.day'),
    Drupal.t('harbourmaster.widget.profile.label.month'),
    Drupal.t('harbourmaster.widget.profile.label.year'),
    Drupal.t('harbourmaster.widget.profile.label.address'),
    Drupal.t('harbourmaster.widget.profile.label.oldPassword'),
    Drupal.t('harbourmaster.widget.profile.label.password'),
    Drupal.t('harbourmaster.widget.profile.label.protectProfile'),
    Drupal.t('harbourmaster.widget.profile.label.avatar'),
    Drupal.t('harbourmaster.widget.profile.label.avatarEdit'),
    Drupal.t('harbourmaster.widget.profile.label.displayName'),
    Drupal.t('harbourmaster.widget.profile.label.name'),
    Drupal.t('harbourmaster.widget.profile.label.email'),
    Drupal.t('harbourmaster.widget.profile.label.securityQuestion'),
    Drupal.t('harbourmaster.widget.profile.label.answer'),
    Drupal.t('harbourmaster.widget.profile.label.community'),
    Drupal.t('harbourmaster.widget.profile.instruction.avatar'),
    Drupal.t('harbourmaster.widget.profile.instruction.displayName'),
    Drupal.t('harbourmaster.widget.profile.placeholder.oldPassword'),
    Drupal.t('harbourmaster.widget.profile.placeholder.password'),
    Drupal.t('harbourmaster.widget.profile.placeholder.verifyPassword'),
    Drupal.t('harbourmaster.widget.profile.placeholder.displayName'),
    Drupal.t('harbourmaster.widget.profile.placeholder.firstname'),
    Drupal.t('harbourmaster.widget.profile.placeholder.lastname'),
    Drupal.t('harbourmaster.widget.profile.placeholder.email_address'),
    Drupal.t('harbourmaster.widget.profile.placeholder.answer'),
    Drupal.t('harbourmaster.widget.profile.placeholder.phone'),
    Drupal.t('harbourmaster.widget.profile.placeholder.address.company'),
    Drupal.t('harbourmaster.widget.profile.placeholder.address.street'),
    Drupal.t('harbourmaster.widget.profile.placeholder.address.streetNumber'),
    Drupal.t('harbourmaster.widget.profile.placeholder.address.postcode'),
    Drupal.t('harbourmaster.widget.profile.placeholder.address.city'),
    Drupal.t('harbourmaster.widget.profile.placeholder.address.country'),
    Drupal.t('harbourmaster.widget.profile.select.salutation.mr'),
    Drupal.t('harbourmaster.widget.profile.select.salutation.mrs'),
    Drupal.t('harbourmaster.widget.profile.select.salutation.none'),
    Drupal.t('harbourmaster.widget.profile.checkbox.subscription.advertising'),
    Drupal.t('harbourmaster.widget.profile.checkbox.subscription.newsletter'),
    Drupal.t('harbourmaster.widget.profile.tab.profile'),
    Drupal.t('harbourmaster.widget.profile.tab.entitlements'),
    Drupal.t('harbourmaster.widget.profile.button.upload'),
    Drupal.t('harbourmaster.widget.profile.button.change_password'),
    Drupal.t('harbourmaster.widget.profile.button.security_question'),
    Drupal.t('harbourmaster.widget.profile.button.memberAdvertisement'),
    Drupal.t('harbourmaster.widget.profile.button.post_entitlement'),
    Drupal.t('harbourmaster.widget.profile.button.entitelement_post_entitlement'),
    Drupal.t('harbourmaster.widget.profile.error.displayName.string'),
    Drupal.t('harbourmaster.widget.profile.error.displayName.maxLength'),
    Drupal.t('harbourmaster.widget.profile.error.displayName.minLength'),
    Drupal.t('harbourmaster.widget.profile.error.displayName.DisplayNameAlreadyExists'),
    Drupal.t('harbourmaster.widget.profile.error.displayName.DisplayNameIsRequired'),
    Drupal.t('harbourmaster.widget.profile.error.displayName.regex'),
    Drupal.t('harbourmaster.widget.profile.error.displayName.required'),
    Drupal.t('harbourmaster.widget.profile.error.email.string'),
    Drupal.t('harbourmaster.widget.profile.error.email.regex'),
    Drupal.t('harbourmaster.widget.profile.error.email.fakeemail'),
    Drupal.t('harbourmaster.widget.profile.error.email.required'),
    Drupal.t('harbourmaster.widget.profile.error.email.LoginAlreadyExists'),
    Drupal.t('harbourmaster.widget.profile.error.email.EmailAlreadyExists'),
    Drupal.t('harbourmaster.widget.profile.error.email.ArgLoginIsRequired'),
    Drupal.t('harbourmaster.widget.profile.error.email.LoginCannotBeEmpty'),
    Drupal.t('harbourmaster.widget.profile.error.oldPassword.string'),
    Drupal.t('harbourmaster.widget.profile.error.oldPassword.required'),
    Drupal.t('harbourmaster.widget.profile.error.oldPassword.IncorrectOldPassword'),
    Drupal.t('harbourmaster.widget.profile.error.password.string'),
    Drupal.t('harbourmaster.widget.profile.error.password.minLength'),
    Drupal.t('harbourmaster.widget.profile.error.password.regex'),
    Drupal.t('harbourmaster.widget.profile.error.password.required'),
    Drupal.t('harbourmaster.widget.profile.error.password.ArgPasswordIsInvalid'),
    Drupal.t('harbourmaster.widget.profile.error.password.NoNumbers'),
    Drupal.t('harbourmaster.widget.profile.error.password.NoLowerCaseLetters'),
    Drupal.t('harbourmaster.widget.profile.error.password.NoUpperCaseLetters'),
    Drupal.t('harbourmaster.widget.profile.error.password.NotMinEigth'),
    Drupal.t('harbourmaster.widget.profile.error.verifyPassword.string'),
    Drupal.t('harbourmaster.widget.profile.error.verifyPassword.passwordEqual'),
    Drupal.t('harbourmaster.widget.profile.error.verifyPassword.required'),
    Drupal.t('harbourmaster.widget.profile.error.verifyPassword.PasswordsDoNotMatch'),
    Drupal.t('harbourmaster.widget.profile.error.salutation.string'),
    Drupal.t('harbourmaster.widget.profile.error.salutation.in'),
    Drupal.t('harbourmaster.widget.profile.error.salutation.required'),
    Drupal.t('harbourmaster.widget.profile.error.firstname.string'),
    Drupal.t('harbourmaster.widget.profile.error.firstname.required'),
    Drupal.t('harbourmaster.widget.profile.error.lastname.string'),
    Drupal.t('harbourmaster.widget.profile.error.lastname.required'),
    Drupal.t('harbourmaster.widget.profile.error.securityQuestions.string'),
    Drupal.t('harbourmaster.widget.profile.error.securityQuestions.required'),
    Drupal.t('harbourmaster.widget.profile.info.password'),
    Drupal.t('harbourmaster.widget.profile.flash.success'),
    Drupal.t('harbourmaster.widget.profile.flash.error'),
    Drupal.t('harbourmaster.widget.signup.title.signup'),
    Drupal.t('harbourmaster.widget.signup.title.error'),
    Drupal.t('harbourmaster.widget.signup.title.success'),
    Drupal.t('harbourmaster.widget.signup.label.displayName'),
    Drupal.t('harbourmaster.widget.signup.label.email'),
    Drupal.t('harbourmaster.widget.signup.label.password'),
    Drupal.t('harbourmaster.widget.signup.label.name'),
    Drupal.t('harbourmaster.widget.signup.label.error'),
    Drupal.t('harbourmaster.widget.signup.label.firstname'),
    Drupal.t('harbourmaster.widget.signup.label.lastname'),
    Drupal.t('harbourmaster.widget.signup.placeholder.displayName'),
    Drupal.t('harbourmaster.widget.signup.placeholder.email'),
    Drupal.t('harbourmaster.widget.signup.placeholder.password'),
    Drupal.t('harbourmaster.widget.signup.placeholder.verifyPassword'),
    Drupal.t('harbourmaster.widget.signup.placeholder.firstname'),
    Drupal.t('harbourmaster.widget.signup.placeholder.lastname'),
    Drupal.t('harbourmaster.widget.signup.select.salutation.none'),
    Drupal.t('harbourmaster.widget.signup.select.salutation.mr'),
    Drupal.t('harbourmaster.widget.signup.select.salutation.mrs'),
    Drupal.t('harbourmaster.widget.signup.checkbox.terms_and_policy'),
    Drupal.t('harbourmaster.widget.signup.checkbox.subscription.advertising'),
    Drupal.t('harbourmaster.widget.signup.checkbox.subscription.newsletter'),
    Drupal.t('harbourmaster.widget.signup.button.signup'),
    Drupal.t('harbourmaster.widget.signup.button.signin'),
    Drupal.t('harbourmaster.widget.signup.error.displayName.string'),
    Drupal.t('harbourmaster.widget.signup.error.displayName.maxLength'),
    Drupal.t('harbourmaster.widget.signup.error.displayName.minLength'),
    Drupal.t('harbourmaster.widget.signup.error.displayName.required'),
    Drupal.t('harbourmaster.widget.signup.error.displayName.LoginAlreadyExists'),
    Drupal.t('harbourmaster.widget.signup.error.displayName.DisplayNameAlreadyExists'),
    Drupal.t('harbourmaster.widget.signup.error.displayName.DisplayNameIsRequired'),
    Drupal.t('harbourmaster.widget.signup.error.displayName.regex'),
    Drupal.t('harbourmaster.widget.signup.error.email.string'),
    Drupal.t('harbourmaster.widget.signup.error.email.regex'),
    Drupal.t('harbourmaster.widget.signup.error.email.fakeemail'),
    Drupal.t('harbourmaster.widget.signup.error.email.required'),
    Drupal.t('harbourmaster.widget.signup.error.email.LoginAlreadyExists'),
    Drupal.t('harbourmaster.widget.signup.error.email.EmailAlreadyExists'),
    Drupal.t('harbourmaster.widget.signup.error.email.ArgLoginIsRequired'),
    Drupal.t('harbourmaster.widget.signup.error.email.LoginCannotBeEmpty'),
    Drupal.t('harbourmaster.widget.signup.error.password.string'),
    Drupal.t('harbourmaster.widget.signup.error.password.minLength'),
    Drupal.t('harbourmaster.widget.signup.error.password.regex'),
    Drupal.t('harbourmaster.widget.signup.error.password.required'),
    Drupal.t('harbourmaster.widget.signup.error.password.ArgPasswordIsInvalid'),
    Drupal.t('harbourmaster.widget.signup.error.password.NoNumbers'),
    Drupal.t('harbourmaster.widget.signup.error.password.NoLowerCaseLetters'),
    Drupal.t('harbourmaster.widget.signup.error.password.NoUpperCaseLetters'),
    Drupal.t('harbourmaster.widget.signup.error.password.NotMinEigth'),
    Drupal.t('harbourmaster.widget.signup.error.verifyPassword.string'),
    Drupal.t('harbourmaster.widget.signup.error.verifyPassword.passwordEqual'),
    Drupal.t('harbourmaster.widget.signup.error.verifyPassword.required'),
    Drupal.t('harbourmaster.widget.signup.error.verifyPassword.PasswordsDoNotMatch'),
    Drupal.t('harbourmaster.widget.signup.error.salutation.string'),
    Drupal.t('harbourmaster.widget.signup.error.salutation.in'),
    Drupal.t('harbourmaster.widget.signup.error.salutation.required'),
    Drupal.t('harbourmaster.widget.signup.error.firstname.string'),
    Drupal.t('harbourmaster.widget.signup.error.firstname.required'),
    Drupal.t('harbourmaster.widget.signup.error.lastname.string'),
    Drupal.t('harbourmaster.widget.signup.error.lastname.required'),
    Drupal.t('harbourmaster.widget.signup.error.terms.boolean'),
    Drupal.t('harbourmaster.widget.signup.error.terms.truthy'),
    Drupal.t('harbourmaster.widget.signup.intro.teaser'),
    Drupal.t('harbourmaster.widget.signup.intro.text'),
    Drupal.t('harbourmaster.widget.signup.info.password'),
    Drupal.t('harbourmaster.widget.signup.flash.error'),
    Drupal.t('harbourmaster.widget.signup.flash.success'),
    Drupal.t('harbourmaster.widget.signin.title.signin'),
    Drupal.t('harbourmaster.widget.signin.title.success'),
    Drupal.t('harbourmaster.widget.signin.title.passwordreset'),
    Drupal.t('harbourmaster.widget.signin.title.passwordresetinit'),
    Drupal.t('harbourmaster.widget.signin.title.unconfirmed'),
    Drupal.t('harbourmaster.widget.signin.label.username'),
    Drupal.t('harbourmaster.widget.signin.label.password'),
    Drupal.t('harbourmaster.widget.signin.placeholder.username'),
    Drupal.t('harbourmaster.widget.signin.placeholder.password'),
    Drupal.t('harbourmaster.widget.signin.button.signin'),
    Drupal.t('harbourmaster.widget.signin.button.signup'),
    Drupal.t('harbourmaster.widget.signin.button.passwordreset'),
    Drupal.t('harbourmaster.widget.signin.button.unconfirmed'),
    Drupal.t('harbourmaster.widget.signin.error.username.required'),
    Drupal.t('harbourmaster.widget.signin.error.username.string'),
    Drupal.t('harbourmaster.widget.signin.error.username.error'),
    Drupal.t('harbourmaster.widget.signin.error.username.credentials'),
    Drupal.t('harbourmaster.widget.signin.error.username.regex'),
    Drupal.t('harbourmaster.widget.signin.error.username.AccountHasNoEmailAddress'),
    Drupal.t('harbourmaster.widget.signin.error.username.NoSuchUser'),
    Drupal.t('harbourmaster.widget.signin.error.username.UserNotConfirmed'),
    Drupal.t('harbourmaster.widget.signin.error.password.required'),
    Drupal.t('harbourmaster.widget.signin.error.password.error'),
    Drupal.t('harbourmaster.widget.signin.error.password.credentials'),
    Drupal.t('harbourmaster.widget.signin.error.requesttoken.LoginIsRequired'),
    Drupal.t('harbourmaster.widget.signin.error.requesttoken.AccountHasNoEmailAddress'),
    Drupal.t('harbourmaster.widget.signin.error.requesttoken.NoSuchUser'),
    Drupal.t('harbourmaster.widget.signin.message.unconfirmed'),
    Drupal.t('harbourmaster.widget.signin.message.unconfirmedresend'),
    Drupal.t('harbourmaster.widget.signin.message.passwordreset.email_sent'),
    Drupal.t('harbourmaster.widget.signin.link.passwordreset'),
    Drupal.t('harbourmaster.widget.signin.link.activate'),
    Drupal.t('harbourmaster.widget.signin.tooltip.twitter'),
    Drupal.t('harbourmaster.widget.signin.tooltip.facebook'),
    Drupal.t('harbourmaster.widget.signin.tooltip.google'),
    Drupal.t('harbourmaster.widget.signin.tooltip.linkedin'),
    Drupal.t('harbourmaster.widget.signin.tooltip.github'),
    Drupal.t('harbourmaster.widget.signin.flash.passwordreset.error'),
    Drupal.t('harbourmaster.widget.signin.flash.error'),
    Drupal.t('harbourmaster.widget.signin.alternate_login_methods'),
    Drupal.t('harbourmaster.widget.password.title.invalidToken'),
    Drupal.t('harbourmaster.widget.password.title.reset'),
    Drupal.t('harbourmaster.widget.password.title.securityQuestions'),
    Drupal.t('harbourmaster.widget.password.title.success'),
    Drupal.t('harbourmaster.widget.password.label.password'),
    Drupal.t('harbourmaster.widget.password.placeholder.answer'),
    Drupal.t('harbourmaster.widget.password.placeholder.password'),
    Drupal.t('harbourmaster.widget.password.placeholder.verifyPassword'),
    Drupal.t('harbourmaster.widget.password.button.changePassword'),
    Drupal.t('harbourmaster.widget.password.error.password.string'),
    Drupal.t('harbourmaster.widget.password.error.password.minLength'),
    Drupal.t('harbourmaster.widget.password.error.password.regex'),
    Drupal.t('harbourmaster.widget.password.error.password.required'),
    Drupal.t('harbourmaster.widget.password.error.password.ArgPasswordIsInvalid'),
    Drupal.t('harbourmaster.widget.password.error.password.NewPasswordRequired'),
    Drupal.t('harbourmaster.widget.password.error.password.NoNumbers'),
    Drupal.t('harbourmaster.widget.password.error.password.NoLowerCaseLetters'),
    Drupal.t('harbourmaster.widget.password.error.password.NoUpperCaseLetters'),
    Drupal.t('harbourmaster.widget.password.error.password.NotMinEigth'),
    Drupal.t('harbourmaster.widget.password.error.verifyPassword.string'),
    Drupal.t('harbourmaster.widget.password.error.verifyPassword.passwordEqual'),
    Drupal.t('harbourmaster.widget.password.error.verifyPassword.required'),
    Drupal.t('harbourmaster.widget.password.error.verifyPassword.PasswordsDoNotMatch'),
    Drupal.t('harbourmaster.widget.password.error.answer.string'),
    Drupal.t('harbourmaster.widget.password.error.answer.required'),
    Drupal.t('harbourmaster.widget.password.error.answer.CannotParseSecurityQuestions'),
    Drupal.t('harbourmaster.widget.password.error.answer.IncompleteSecurityQuestions'),
    Drupal.t('harbourmaster.widget.password.error.answer.WrongSecurityQuestionsAnswer'),
    Drupal.t('harbourmaster.widget.password.error.token.PasswordRecoveryTokenRequired'),
    Drupal.t('harbourmaster.widget.password.flash.error'),
    Drupal.t('harbourmaster.widget.password.intro.text'),
    Drupal.t('harbourmaster.widget.general.button.save'),
    Drupal.t('harbourmaster.widget.general.button.close'),
    Drupal.t('harbourmaster.widget.general.button.back'),
    Drupal.t('harbourmaster.widget.general.forbidden'),
    Drupal.t('harbourmaster.widget.general.error')
  ];

  // Recursive walk through the Ember.I18n.translations Object and replace translations with translations given by drupal.
  var loadDrupalTranslation = function (data) {

    function recurse(cur, prop) {
      for (var p in cur) {
        if (cur.hasOwnProperty(p)) {
          var longp = prop ? prop + "." + p : p;
          if (Object(cur[p]) !== cur[p]) {

            var drupalTranslationKey = "harbourmaster.widget." + longp;
            var drupalTranslation = Drupal.t(drupalTranslationKey);

            if (drupalTranslationKey !== drupalTranslation) {
              // Only overwrite  Ember.I18n.translations when drupal give a translation.
              cur[p] = drupalTranslation;
            }
          }
          else {
            recurse(cur[p], longp);
          }
        }
      }
    }
    recurse(data, "");
  };
  var ref;
  if (typeof Ember !== "undefined" && Ember !== null ? (ref = Ember.I18n) !== null ? ref.translations : void 0 : void 0) {
    loadDrupalTranslation(Ember.I18n.translations);
  }

});

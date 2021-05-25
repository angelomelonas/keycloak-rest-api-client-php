<?php

declare(strict_types=1);

namespace Fschmtt\Keycloak\Representation;

class Realm extends Representation
{
    public function __construct(
        protected ?int $accessCodeLifespan = null,
        protected ?int $accessCodeLifespanLogin = null,
        protected ?int $accessCodeLifespanUserAction = null,
        protected ?int $accessTokenLifespan = null,
        protected ?int $accessTokenLifespanForImplicitFlow = null,
        protected ?string $accountTheme = null,
        protected ?int $actionTokenGeneratedByAdminLifespan = null,
        protected ?int $actionTokenGeneratedByUserLifespan = null,
        protected ?bool $adminEventsDetailsEnabled = null,
        protected ?bool $adminEventsEnabled = null,
        protected ?string $adminTheme = null,
        protected ?array $attributes = null,
        protected ?array $authenticationFlows = null,
        protected ?array $authenticatorConfig = null,
        protected ?string $browserFlow = null,
        protected ?array $browserSecurityHeaders = null,
        protected ?bool $bruteForceProtected = null,
        protected ?string $clientAuthenticationFlow = null,
        protected ?int $clientOfflineSessionIdleTimeout = null,
        protected ?int $clientOfflineSessionMaxLifespan = null,
        protected ?ClientPolicies $clientPolicies = null,
        protected ?ClientProfiles $clientProfiles = null,
        protected ?array $clientScopeMappings = null,
        protected ?array $clientScopes = null,
        protected ?int $clientSessionIdleTimeout = null,
        protected ?int $clientSessionMaxLifespan = null,
        protected ?array $clients = null,
        protected ?array $components = null,
        protected ?array $defaultClientScopes = null,
        protected ?array $defaultGroups = null,
        protected ?string $defaultLocale = null,
        protected ?array $defaultOptionalClientScopes = null,
        protected ?Role $defaultRole = null,
        protected ?string $defaultSignatureAlgorithm = null,
        protected ?string $directGrantFlow = null,
        protected ?string $displayName = null,
        protected ?string $displayNameHtml = null,
        protected ?string $dockerAuthenticationFlow = null,
        protected ?bool $duplicateEmailsAllowed = null,
        protected ?bool $editUsernameAllowed = null,
        protected ?string $emailTheme = null,
        protected ?bool $enabled = null,
        protected ?array $enabledEventTypes = null,
        protected ?bool $eventsEnabled = null,
        protected ?int $eventsExpiration = null,
        protected ?array $eventsListeners = null,
        protected ?int $failureFactor = null,
        protected ?array $federatedUsers = null,
        protected ?array $groups = null,
        protected ?string $id = null,
        protected ?array $identityProviderMappers = null,
        protected ?array $identityProviders = null,
        protected ?bool $internationalizationEnabled = null,
        protected ?string $keycloakVersion = null,
        protected ?string $loginTheme = null,
        protected ?bool $loginWithEmailAllowed = null,
        protected ?int $maxDeltaTimeSeconds = null,
        protected ?int $maxFailureWaitSeconds = null,
        protected ?int $minimumQuickLoginWaitSeconds = null,
        protected ?int $notBefore = null,
        protected ?int $oAuth2DeviceCodeLifespan = null,
        protected ?int $oAuth2DevicePollingInterval = null,
        protected ?int $oauth2DeviceCodeLifespan = null,
        protected ?int $oauth2DevicePollingInterval = null,
        protected ?int $offlineSessionIdleCount = null,
        protected ?int $offlineSessionIdleTimeout = null,
        protected ?int $offlineSessionMaxLifespan = null,
        protected ?bool $offlineSessionMaxLifespanEnabled = null,
        protected ?string $otpPolicyAlgorithm = null,
        protected ?int $otpPolicyDigits = null,
        protected ?int $otpPolicyInitialCounter = null,
        protected ?int $otpPolicyLookAheadWindow = null,
        protected ?int $otpPolicyPeriod = null,
        protected ?string $otpPolicyType = null,
        protected ?array $otpSupportedApplications = null,
        protected ?string $passwordPolicy = null,
        protected ?bool $permanentLockout = null,
        protected ?array $protocolMappers = null,
        protected ?int $quickLoginCheckMilliSeconds = null,
        protected ?string $realm = null,
        protected ?int $refreshTokenMaxReuse = null,
        protected ?bool $registrationAllowed = null,
        protected ?bool $registrationEmailAsUsername = null,
        protected ?string $registrationFlow = null,
        protected ?bool $rememberMe = null,
        protected ?array $requiredActions = null,
        protected ?array $requiredCredentials = null,
        protected ?string $resetCredentialsFlow = null,
        protected ?bool $resetPasswordAllowed = null,
        protected ?bool $revokeRefreshToken = null,
        protected ?Roles $roles = null,
        protected ?array $scopeMappings = null,
        protected ?array $smtpServer = null,
        protected ?string $sslRequired = null,
        protected ?int $ssoSessionIdleTimeout = null,
        protected ?int $ssoSessionIdleTimeoutRememberMe = null,
        protected ?int $ssoSessionMaxLifespan = null,
        protected ?int $ssoSessionMaxLifespanRememberMe = null,
        protected ?array $supportedLocales = null,
        protected ?array $userFederationMappers = null,
        protected ?array $userFederationProviders = null,
        protected ?bool $userManagedAccessAllowed = null,
        protected ?array $users = null,
        protected ?bool $verifyEmail = null,
        protected ?int $waitIncrementSeconds = null,
        protected ?array $webAuthnPolicyAcceptableAaguids = null,
        protected ?string $webAuthnPolicyAttestationConveyancePreference = null,
        protected ?string $webAuthnPolicyAuthenticatorAttachment = null,
        protected ?bool $webAuthnPolicyAvoidSameAuthenticatorRegister = null,
        protected ?int $webAuthnPolicyCreateTimeout = null,
        protected ?array $webAuthnPolicyPasswordlessAcceptableAaguids = null,
        protected ?string $webAuthnPolicyPasswordlessAttestationConveyancePreference = null,
        protected ?string $webAuthnPolicyPasswordlessAuthenticatorAttachment = null,
        protected ?bool $webAuthnPolicyPasswordlessAvoidSameAuthenticatorRegister = null,
        protected ?int $webAuthnPolicyPasswordlessCreateTimeout = null,
        protected ?string $webAuthnPolicyPasswordlessRequireResidentKey = null,
        protected ?string $webAuthnPolicyPasswordlessRpEntityName = null,
        protected ?string $webAuthnPolicyPasswordlessRpId = null,
        protected ?array $webAuthnPolicyPasswordlessSignatureAlgorithms = null,
        protected ?string $webAuthnPolicyPasswordlessUserVerificationRequirement = null,
        protected ?string $webAuthnPolicyRequireResidentKey = null,
        protected ?string $webAuthnPolicyRpEntityName = null,
        protected ?string $webAuthnPolicyRpId = null,
        protected ?array $webAuthnPolicySignatureAlgorithms = null,
        protected ?string $webAuthnPolicyUserVerificationRequirement = null,
    ) {
        parent::__construct(
            $accessCodeLifespan,
            $accessCodeLifespanLogin,
            $accessCodeLifespanUserAction,
            $accessTokenLifespan,
            $accessTokenLifespanForImplicitFlow,
            $accountTheme,
            $actionTokenGeneratedByAdminLifespan,
            $actionTokenGeneratedByUserLifespan,
            $adminEventsDetailsEnabled,
            $adminEventsEnabled,
            $adminTheme,
            $attributes,
            $authenticationFlows,
            $authenticatorConfig,
            $browserFlow,
            $browserSecurityHeaders,
            $bruteForceProtected,
            $clientAuthenticationFlow,
            $clientOfflineSessionIdleTimeout,
            $clientOfflineSessionMaxLifespan,
            $clientPolicies,
            $clientProfiles,
            $clientScopeMappings,
            $clientScopes,
            $clientSessionIdleTimeout,
            $clientSessionMaxLifespan,
            $clients,
            $components,
            $defaultClientScopes,
            $defaultGroups,
            $defaultLocale,
            $defaultOptionalClientScopes,
            $defaultRole,
            $defaultSignatureAlgorithm,
            $directGrantFlow,
            $displayName,
            $displayNameHtml,
            $dockerAuthenticationFlow,
            $duplicateEmailsAllowed,
            $editUsernameAllowed,
            $emailTheme,
            $enabled,
            $enabledEventTypes,
            $eventsEnabled,
            $eventsExpiration,
            $eventsListeners,
            $failureFactor,
            $federatedUsers,
            $groups,
            $id,
            $identityProviderMappers,
            $identityProviders,
            $internationalizationEnabled,
            $keycloakVersion,
            $loginTheme,
            $loginWithEmailAllowed,
            $maxDeltaTimeSeconds,
            $maxFailureWaitSeconds,
            $minimumQuickLoginWaitSeconds,
            $notBefore,
            $oAuth2DeviceCodeLifespan,
            $oAuth2DevicePollingInterval,
            $oauth2DeviceCodeLifespan,
            $oauth2DevicePollingInterval,
            $offlineSessionIdleCount,
            $offlineSessionIdleTimeout,
            $offlineSessionMaxLifespan,
            $offlineSessionMaxLifespanEnabled,
            $otpPolicyAlgorithm,
            $otpPolicyDigits,
            $otpPolicyInitialCounter,
            $otpPolicyLookAheadWindow,
            $otpPolicyPeriod,
            $otpPolicyType,
            $otpSupportedApplications,
            $passwordPolicy,
            $permanentLockout,
            $protocolMappers,
            $quickLoginCheckMilliSeconds,
            $realm,
            $refreshTokenMaxReuse,
            $registrationAllowed,
            $registrationEmailAsUsername,
            $registrationFlow,
            $rememberMe,
            $requiredActions,
            $requiredCredentials,
            $resetCredentialsFlow,
            $resetPasswordAllowed,
            $revokeRefreshToken,
            $roles,
            $scopeMappings,
            $smtpServer,
            $sslRequired,
            $ssoSessionIdleTimeout,
            $ssoSessionIdleTimeoutRememberMe,
            $ssoSessionMaxLifespan,
            $ssoSessionMaxLifespanRememberMe,
            $supportedLocales,
            $userFederationMappers,
            $userFederationProviders,
            $userManagedAccessAllowed,
            $users,
            $verifyEmail,
            $waitIncrementSeconds,
            $webAuthnPolicyAcceptableAaguids,
            $webAuthnPolicyAttestationConveyancePreference,
            $webAuthnPolicyAuthenticatorAttachment,
            $webAuthnPolicyAvoidSameAuthenticatorRegister,
            $webAuthnPolicyCreateTimeout,
            $webAuthnPolicyPasswordlessAcceptableAaguids,
            $webAuthnPolicyPasswordlessAttestationConveyancePreference,
            $webAuthnPolicyPasswordlessAuthenticatorAttachment,
            $webAuthnPolicyPasswordlessAvoidSameAuthenticatorRegister,
            $webAuthnPolicyPasswordlessCreateTimeout,
            $webAuthnPolicyPasswordlessRequireResidentKey,
            $webAuthnPolicyPasswordlessRpEntityName,
            $webAuthnPolicyPasswordlessRpId,
            $webAuthnPolicyPasswordlessSignatureAlgorithms,
            $webAuthnPolicyPasswordlessUserVerificationRequirement,
            $webAuthnPolicyRequireResidentKey,
            $webAuthnPolicyRpEntityName,
            $webAuthnPolicyRpId,
            $webAuthnPolicySignatureAlgorithms,
            $webAuthnPolicyUserVerificationRequirement,
        );
    }

    public static function from(array $properties): static
    {
        foreach ($properties as $property => $value) {
            if ($property === 'defaultRole') {
                $properties[$property] = Role::from($value);
            }
        }

        return parent::from($properties);
    }
}
